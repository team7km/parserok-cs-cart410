<?php
/**
 * PHPSQLCreator
 *
 * A pure PHP SQL creator, which generates SQL from the output of PHPSQLParser.
 *
 * Copyright (c) 2012, André Rothe <arothe@phosco.info, phosco@gmx.de>
 *
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *   * Redistributions of source code must retain the above copyright notice,
 *     this list of conditions and the following disclaimer.
 *   * Redistributions in binary form must reproduce the above copyright notice,
 *     this list of conditions and the following disclaimer in the documentation
 *     and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR
 * BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
 * DAMAGE.
 */

if (!defined('HAVE_PHP_SQL_CREATOR')) {

    class PHPSQLCreator
    {
        public function __construct($parsed = false)
        {
            if ($parsed) {
                $this->create($parsed);
            }
        }

        public function create($parsed)
        {
            $k = key($parsed);
            switch ($k) {

            case "UNION":
            case "UNION ALL":
                throw new UnsupportedFeatureException($k);
                break;
            case "SELECT":
                $this->created = $this->processSelectStatement($parsed);
                break;
            case "INSERT":
                $this->created = $this->processInsertStatement($parsed);
                break;
            case "REPLACE":
                $this->created = $this->processReplaceStatement($parsed);
                break;
            case "DELETE":
                $this->created = $this->processDeleteStatement($parsed);
                break;
            case "UPDATE":
                $this->created = $this->processUpdateStatement($parsed);
                break;
            default:
                throw new UnsupportedFeatureException($k);
                break;
            }

            return $this->created;
        }

        protected function processSelectStatement($parsed)
        {
            $sql = $this->processSELECT($parsed['SELECT']) . " " . $this->processFROM($parsed['FROM']);
            if (isset($parsed['WHERE'])) {
                $sql .= " " . $this->processWHERE($parsed['WHERE']);
            }
            if (isset($parsed['GROUP'])) {
                $sql .= " " . $this->processGROUP($parsed['GROUP']);
            }
            if (isset($parsed['ORDER'])) {
                $sql .= " " . $this->processORDER($parsed['ORDER']);
            }
            if (isset($parsed['LIMIT'])) {
                $sql .= " " . $this->processLIMIT($parsed['LIMIT']);
            }

            return $sql;
        }

        protected function processInsertStatement($parsed)
        {
            return $this->processINSERT($parsed['INSERT']) . " " . str_replace("\n", "\n\t", $this->processVALUES($parsed['VALUES']));
            # TODO: subquery?
        }

        protected function processReplaceStatement($parsed)
        {
            return $this->processREPLACE($parsed['REPLACE']) . " " . str_replace("\n", "\n\t", $this->processVALUES($parsed['VALUES']));
            # TODO: subquery?
        }

        protected function processDeleteStatement($parsed)
        {
            return $this->processDELETE($parsed['DELETE']) . " " . $this->processFROM($parsed['FROM']) . " "
                    . $this->processWHERE($parsed['WHERE']);
        }

        protected function processUpdateStatement($parsed)
        {
            $sql = $this->processUPDATE($parsed['UPDATE']) . " " . $this->processSET($parsed['SET']);
            if (isset($parsed['WHERE'])) {
                $sql .= " " . $this->processWHERE($parsed['WHERE']);
            }

            return $sql;
        }

        protected function processDELETE($parsed)
        {
            $sql = "DELETE";
            foreach ($parsed['TABLES'] as $k => $v) {
                $sql .= $v . ",";
            }

            return substr($sql, 0, -1);
        }

        protected function processSELECT($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= "\n" . $this->processColRef($v);
                $sql .= $this->processSelectExpression($v);
                $sql .= $this->processFunction($v);
                $sql .= $this->processConstant($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('SELECT', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }
            $sql = substr($sql, 0, -1);
            $sql = str_replace("\n", "\n\t", $sql);

            return "SELECT" . $sql;
        }

        protected function processFROM($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= "\n" . $this->processTable($v, $k);
                $sql .= $this->processTableExpression($v, $k);
                $sql .= $this->processSubQuery($v, $k);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('FROM', $k, $v, 'expr_type');
                }

                $sql .= "";
            }
            $sql = str_replace("\n", "\n\t", $sql);

            return "\nFROM" . $sql;
        }

        protected function processORDER($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= "\n" . $this->processOrderByAlias($v);
                $sql .= $this->processColRef($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('ORDER', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }
            $sql = substr($sql, 0, -1);
            $sql = str_replace("\n", "\n\t", $sql);

            return "\nORDER BY" . $sql;
        }

        protected function processLIMIT($parsed)
        {
            $sql = ($parsed['offset'] ? $parsed['offset'] . ", " : "") . $parsed['rowcount'];
            if ($sql === "") {
                throw new UnableToCreateSQLException('LIMIT', 'rowcount', $parsed, 'rowcount');
            }

            return "\nLIMIT\n\t" . $sql;
        }

        protected function processGROUP($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= "\n" . $this->processColRef($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('GROUP', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }
            $sql = substr($sql, 0, -1);
            $sql = str_replace("\n", "\n\t", $sql);

            return "\nGROUP BY" . $sql;
        }

        protected function processRecord($parsed)
        {
            if ($parsed['expr_type'] !== 'record') {
                return "";
            }
            $sql = "";
            foreach ($parsed['data'] as $k => $v) {
                $len = strlen($sql);
                $sql .= "\n" . $this->processConstant($v);
                $sql .= $this->processFunction($v);
                $sql .= $this->processOperator($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('record', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }
            $sql = substr($sql, 0, -1);
            $sql = str_replace("\n", "\n\t", $sql);

            return "\n(" . $sql . "\n)";

        }

        protected function processVALUES($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processRecord($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('VALUES', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }
            $sql = substr($sql, 0, -1);
            $sql = str_replace("\n", "\n\t", $sql);

            return "\nVALUES " . $sql;
        }

        protected function processINSERT($parsed)
        {
            $sql = "INSERT\n\tINTO " . $parsed['table'];

            if ($parsed['columns'] === false) {
                return $sql;
            }

            $columns = "";
            foreach ($parsed['columns'] as $k => $v) {
                $len = strlen($columns);
                $columns .= "\n" . $this->processColRef($v);

                if ($len == strlen($columns)) {
                    throw new UnableToCreateSQLException('INSERT[columns]', $k, $v, 'expr_type');
                }

                $columns .= ",";
            }

            if ($columns !== "") {
                $columns = substr($columns, 0, -1);
                $columns = str_replace("\n", "\n\t", $columns);
                $columns = "\n(" . $columns . "\n)";
            }

            $columns = str_replace("\n", "\n\t\t", $columns);
            $sql .= $columns;

            return $sql;
        }

        protected function processREPLACE($parsed)
        {
            $sql = "REPLACE\n\tINTO " . $parsed['table'];

            if ($parsed['columns'] === false) {
                return $sql;
            }

            $columns = "";
            foreach ($parsed['columns'] as $k => $v) {
                $len = strlen($columns);
                $columns .= "\n" . $this->processColRef($v);

                if ($len == strlen($columns)) {
                    throw new UnableToCreateSQLException('REPLACE[columns]', $k, $v, 'expr_type');
                }

                $columns .= ",";
            }

            if ($columns !== "") {
                $columns = substr($columns, 0, -1);
                $columns = str_replace("\n", "\n\t", $columns);
                $columns = "\n(" . $columns . "\n)";
            }

            $columns = str_replace("\n", "\n\t\t", $columns);
            $sql .= $columns;

            return $sql;
        }

        protected function processUPDATE($parsed)
        {
            return "UPDATE " . $parsed[0]['table'];
        }

        protected function processSetExpression($parsed)
        {
            if ($parsed['expr_type'] !== 'expression') {
                return "";
            }
            $sql = "";
            foreach ($parsed['sub_tree'] as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processColRef($v);
                $sql .= $this->processConstant($v);
                $sql .= $this->processOperator($v);
                $sql .= $this->processFunction($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('SET expression subtree', $k, $v, 'expr_type');
                }

                $sql .= " ";
            }

            $sql = substr($sql, 0, -1);

            return $sql;
        }

        protected function processSET($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processSetExpression($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('SET', $k, $v, 'expr_type');
                }

                $sql .= ",";
            }

            return "SET " . substr($sql, 0, -1);
        }

        protected function processWHERE($parsed)
        {
            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);

                $sql .= $this->processOperator($v);
                $sql .= $this->processConstant($v);
                $sql .= $this->processColRef($v);
                $sql .= $this->processSubquery($v);
                $sql .= $this->processInList($v);
                $sql .= $this->processFunction($v);
                $sql .= $this->processWhereExpression($v);

                if (strlen($sql) == $len) {
                    throw new UnableToCreateSQLException('WHERE', $k, $v, 'expr_type');
                }

                $sql .= "";
            }
            $sql = str_replace("\n", "\n\t", $sql);

            return "\nWHERE\n\t\t" . $sql;
        }

        protected function processWhereExpression($parsed)
        {
            if ($parsed['expr_type'] !== 'expression') {
                return "";
            }
            $sql = "";
            foreach ($parsed['sub_tree'] as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processColRef($v);
                $sql .= $this->processConstant($v);
                $sql .= $this->processOperator($v);
                $sql .= $this->processInList($v);
                $sql .= $this->processFunction($v);
                $sql .= $this->processWhereExpression($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('WHERE expression subtree', $k, $v, 'expr_type');
                }

                $sql .= " ";
            }

            $sql = str_replace("\n", "\n\t", $sql);
            $sql = "(\n\t\t" . $sql . "\n\t)";;

            return $sql;
        }

        protected function processOrderByAlias($parsed)
        {
            if ($parsed['expr_type'] !== 'alias') {
                return "";
            }

            return $parsed['base_expr'] . $this->processDirection($parsed['direction']);
        }

        protected function processLimitRowCount($key, $value)
        {
            if ($key != 'rowcount') {
                return "";
            }

            return $value;
        }

        protected function processLimitOffset($key, $value)
        {
            if ($key !== 'offset') {
                return "";
            }

            return $value;
        }

        protected function processFunction($parsed)
        {
            if (($parsed['expr_type'] !== 'aggregate_function') && ($parsed['expr_type'] !== 'function')) {
                return "";
            }

            if ($parsed['sub_tree'] === false) {
                return $parsed['base_expr'] . "()";
            }

            $sql = "";
            foreach ($parsed['sub_tree'] as $k => $v) {
                $len = strlen($sql);

                if ($v['expr_type'] == 'operator') {
                    $sql = substr($sql, 0, -1);
                }

                $sql .= $this->processFunction($v);
                $sql .= $this->processConstant($v);
                $sql .= $this->processColRef($v);
                $sql .= $this->processOperator($v);
                $sql .= $this->processReserved($v);

                $sql .= ($this->isReserved($v) ? " " : ",");

                if ($v['expr_type'] == 'operator') {
                    $sql = substr($sql, 0, -1);
                }

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('function subtree', $k, $v, 'expr_type');
                }
            }

            return $parsed['base_expr'] . "(" . substr($sql, 0, -1) . ")";
        }

        protected function processSelectExpression($parsed)
        {
            if ($parsed['expr_type'] !== 'expression') {
                return "";
            }
            $sql = $this->processSubTree($parsed, " ");
            $sql .= $this->processAlias($parsed['alias']);

            return $sql;
        }

        protected function processSubTree($parsed, $delim = " ")
        {
            if ($parsed['sub_tree'] === '') {
                return "";
            }
            $sql = "";
            foreach ($parsed['sub_tree'] as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processFunction($v);
                $sql .= $this->processConstant($v);
                $sql .= $this->processSubQuery($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('expression subtree', $k, $v, 'expr_type');
                }

                $sql .= $delim;
            }

            return substr($sql, 0, -1);
        }

        protected function processRefClause($parsed)
        {
            if ($parsed === false) {
                return "";
            }

            $sql = "";
            foreach ($parsed as $k => $v) {
                $len = strlen($sql);
                $sql .= $this->processColRef($v);
                $sql .= $this->processOperator($v);
                $sql .= $this->processConstant($v);

                if ($len == strlen($sql)) {
                    throw new UnableToCreateSQLException('expression ref_clause', $k, $v, 'expr_type');
                }

                $sql .= "";
            }
            $sql = str_replace("\n", "\n\t", $sql);

            return "(\n\t\t" . $sql . "\n\t)";
        }

        protected function processAlias($parsed)
        {
            if ($parsed === false) {
                return "";
            }
            $sql = "";
            if ($parsed['as']) {
                $sql .= " as";
            }
            $sql .= " " . $parsed['name'];

            return $sql;
        }

        protected function processJoin($parsed)
        {
            if ($parsed === 'CROSS') {
                return ",";
            }
            if ($parsed === 'JOIN') {
                return "INNER JOIN";
            }
            if ($parsed === 'LEFT') {
                return "LEFT JOIN";
            }
            if ($parsed === 'RIGHT') {
                return "RIGHT JOIN";
            }
            // TODO: add more
            throw new UnsupportedFeatureException($parsed);
        }

        protected function processRefType($parsed)
        {
            if ($parsed === false) {
                return "";
            }
            if ($parsed === 'ON') {
                return " ON ";
            }
            if ($parsed === 'USING') {
                return " USING ";
            }
            // TODO: add more
            throw new UnsupportedFeatureException($parsed);
        }

        protected function processTable($parsed, $index)
        {
            if ($parsed['expr_type'] !== 'table') {
                return "";
            }

            $sql = $parsed['table'];
            $sql .= $this->processAlias($parsed['alias']);

            if ($index !== 0) {
                $sql = $this->processJoin($parsed['join_type']) . "\n\t" . $sql;
                $sql .= "\n" . $this->processRefType($parsed['ref_type']);
                $sql .= "\n\t" . $this->processRefClause($parsed['ref_clause']);
            }
            $sql = str_replace("\n", "\n\t", $sql);

            return $sql;
        }

        protected function processTableExpression($parsed, $index)
        {
            if ($parsed['expr_type'] !== 'table_expression') {
                return "";
            }
            $sql = substr($this->processFROM($parsed['sub_tree']), 5); // remove FROM keyword
            $sql = "(" . $sql . ")";
            $sql .= $this->processAlias($parsed['alias']);

            if ($index !== 0) {
                $sql = $this->processJoin($parsed['join_type']) . " " . $sql;
                $sql .= $this->processRefType($parsed['ref_type']);
                $sql .= $this->processRefClause($parsed['ref_clause']);
            }

            return $sql;
        }

        protected function processSubQuery($parsed, $index = 0)
        {
            if ($parsed['expr_type'] !== 'subquery') {
                return "";
            }

            $sql = $this->processSelectStatement($parsed['sub_tree']);
            $sql = "(" . $sql . ")";

            if (isset($parsed['alias'])) {
                $sql .= $this->processAlias($parsed['alias']);
            }

            if ($index !== 0) {
                $sql = $this->processJoin($parsed['join_type']) . " " . $sql;
                $sql .= $this->processRefType($parsed['ref_type']);
                $sql .= $this->processRefClause($parsed['ref_clause']);
            }

            return $sql;
        }

        protected function processOperator($parsed)
        {
            if ($parsed['expr_type'] !== 'operator') {
                return "";
            }

            return in_array($parsed['base_expr'], array('AND', 'OR', 'XOR')) ? "\n" . $parsed['base_expr'] . "\n\t" : " " . $parsed['base_expr'] . " ";
        }

        protected function processColRef($parsed)
        {
            if ($parsed['expr_type'] !== 'colref') {
                return "";
            }
            $sql = $parsed['base_expr'];
            if (isset($parsed['alias'])) {
                $sql .= $this->processAlias($parsed['alias']);
            }
            if (isset($parsed['direction'])) {
                $sql .= $this->processDirection($parsed['direction']);
            }

            return $sql;
        }

        protected function processDirection($parsed)
        {
            $sql = ($parsed ? " " . $parsed : "");

            return $sql;
        }

        protected function processReserved($parsed)
        {
            if (!$this->isReserved($parsed)) {
                return "";
            }

            return $parsed['base_expr'];
        }

        protected function isReserved($parsed)
        {
            return ($parsed['expr_type'] === 'reserved');
        }

        protected function processConstant($parsed)
        {
            if ($parsed['expr_type'] !== 'const') {
                return "";
            }

            return $parsed['base_expr'];
        }

        protected function processInList($parsed)
        {
            if ($parsed['expr_type'] !== 'in-list') {
                return "";
            }
            $sql = $this->processSubTree($parsed, ",");

            return "(" . $sql . ")";
        }

    } // END CLASS

    class UnableToCreateSQLException extends Exception
    {
        protected $part;
        protected $partkey;
        protected $entry;
        protected $entrykey;

        public function __construct($part, $partkey, $entry, $entrykey)
        {
            $this->part = $part;
            $this->partkey = $partkey;
            $this->entry = $entry;
            $this->entrykey = $entrykey;
            parent::__construct("unknown " . $entrykey . " in " . $part . "[" . $partkey . "] " . $entry[$entrykey], 15);
        }

        public function getEntry()
        {
            return $this->entry;
        }

        public function getEntryKey()
        {
            return $this->entrykey;
        }

        public function getSQLPart()
        {
            return $this->part;
        }

        public function getSQLPartKey()
        {
            return $this->partkey;
        }
    }

    class UnsupportedFeatureException extends Exception
    {
        protected $key;

        public function __construct($key)
        {
            $this->key = $key;
            parent::__construct($key . " not implemented.", 20);
        }

        public function getKey()
        {
            return $this->key;
        }
    }
    define('HAVE_PHP_SQL_CREATOR', 1);
}
