<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_energothemes_ie9fix_styles_block_files($styles){
	$debug=false;

	$config=Registry::get('config');
	$filename=fn_merge_styles($styles);
	$config = Registry::get('config');
	if (strpos($filename, $config['https_location']) !== false){
		$css_file=str_replace($config['https_location'], "", $filename);
	}else{
		$css_file=str_replace($config['http_location'], "", $filename);
	}
	if ($debug===true){
		fn_set_notification('E', "CSS file", $css_file);
	}
	$storage='.'.substr($css_file, 0,strpos($css_file,"standalone"));
	if (strpos($css_file, "?")){
		$css_file='.'.substr($css_file, 0,strpos($css_file, "?"));
	}else{
		$css_file='.'.$css_file;
	}

	if ($debug===true){
		fn_set_notification('E', "CSS file", $css_file);
	}

	if (file_exists($css_file)){
		if ($debug===true){
			fn_set_notification('E', "Found", $css_file);
		}

		$css=file_get_contents($css_file);

		$splitter = new Splitter();
		$count = $splitter->countSelectors($css)  - 4095;
		if ($count > 0) {
		    $part = 2;
		    for($i = $count; $i > 0; $i -= 4095) {
		    	$split_name=$storage."styles-split{$part}.css";
		        file_put_contents($split_name, $splitter->split($css, $part));
		        $part++;
		    }
		}

		$content.="<!--[if lte IE 9]>";
		if ($count > 0) {
		    $part = 2;
		    for($i = $count; $i > 0; $i -= 4095) {
				$split_http=$config['http_location'].substr($storage,1)."styles-split{$part}.css";

		        $content.='<link type="text/css" rel="stylesheet" href="'.$split_http.'" />';
		        $part++;
		    }
		}
		$content.="<![endif]-->";
		if ($debug===true){
			fn_set_notification('E', "Added:", htmlspecialchars($content));
		}
		Registry::set('addons.energothemes_ie9fix.style',$content);
	}
}

function fn_energothemes_ie9fix()
{
	
}


/**
 * PHP CSS Splitter
 *
 * Based on https://github.com/zweilove/css_splitter but written for PHP
 *
 * @homepage  http://www.github.com/dlundgren/php-css-splitter
 * @author    David Lundgren
 * @copyright 2014, David Lundgren. All Rights Reserved.
 * @license   MIT
 */

/**
 * Splitter of the CSS
 *
 * This class is responsible for counting and splitting a CSS file into given chunks.
 *
 * This is most useful for IE9 and lower which have a selector limit of 4096 per stylesheet
 *
 * @package CssSplitter
 */
class Splitter
{
	/**
	 * @var integer The default number of selectors to split on
	 */
	const MAX_SELECTORS_DEFAULT = 4095;

	/**
	 * Counts the selectors in the given css
	 *
	 * @param string $css
	 * @return int The count of selectors in the CSS
	 */
	public function countSelectors($css)
	{
		$count = 0;
		foreach ($this->splitIntoBlocks($css) as $rules) {
			$count += $rules['count'];
		}

		return $count;
	}

	/**
	 * Returns the requested part of the split css
	 *
	 * @param string $css
	 * @param int    $part
	 * @param int    $maxSelectors
	 * @return null|string
	 */
	public function split($css, $part = 1, $maxSelectors = self::MAX_SELECTORS_DEFAULT)
	{
		if (empty($css)) {
			return null;
		}

		$charset = $this->extractCharset($css);
		isset($charset) && $css = str_replace($charset, '', $css);
		if (empty($css)) {
			return null;
		}

		$blocks = $this->splitIntoBlocks($css);
		if (empty($blocks)) {
			return null;
		}

		$output    = $charset ? : '';
		$count     = 0;
		$partCount = 1;
		foreach ($blocks as $block) {
			$appliedMedia = false;
			foreach ($block['rules'] as $rule) {
				$tmpCount = $rule['count'];

				// we have a new part so let's reset and increase
				if (($count + $tmpCount) > $maxSelectors) {
					$partCount++;
					$count = 0;
				}

				$count += $tmpCount;
				if ($partCount < $part) {
					continue;
				}
				if ($partCount > $part) {
					break;
				}

				if (!$appliedMedia && isset($block['media'])) {
					$output .= $block['media'] . ' {';
					$appliedMedia = true;
				}
				$output .= $rule['rule'];
			}
			$appliedMedia && $output .= '}';
		}

		return $output;
	}

	/**
	 * Summarizes the block of CSS
	 *
	 * This splits the block into it's css rules and then counts the selectors in the rule
	 *
	 * @param $block
	 * @return array Array(rules,count)
	 */
	private function summarizeBlock($block)
	{
		$block = array(
			'rules' => is_array($block) ? $block : $this->splitIntoRules(trim($block)),
			'count' => 0
		);
		foreach ($block['rules'] as $key => $rule) {
			$block['rules'][$key] = array(
				'rule'  => $rule,
				'count' => $this->countSelectorsInRule($rule),
			);
			$block['count'] += $block['rules'][$key]['count'];
		}

		return $block;
	}

	/**
	 * Splits the css into blocks maintaining the order of the rules and media queries
	 *
	 * This makes it easier to split the CSS into files when a media query might be split
	 *
	 * @param $css
	 * @return array
	 */
	private function splitIntoBlocks($css)
	{
		if (is_array($css)) {
			return $css;
		}

		$blocks = array();
		$css    = $this->stripComments($css);
		$offset = 0;
		if (preg_match_all('/(@media[^{]*){([^{}]*{[^}]*})*\s*}/ism', $css, $matches, PREG_OFFSET_CAPTURE) > 0) {
			foreach ($matches[0] as $key => $match) {
				list($media, $start) = $match;
				if ($start > $offset) {
					$block = trim(substr($css, $offset, $start - $offset));
					if (!empty($block)) {
						$blocks[] = $this->summarizeBlock($block);
					}
				}
				$offset         = $start + strlen($media);
				$block          = $this->summarizeBlock(substr($media, strpos($media, '{') + 1, -1));
				$block['media'] = trim($matches[1][$key][0]);
				$blocks[]       = $block;
			}

			// catch the remainder after the last
			$block = trim(substr($css, $offset));
			if (!empty($block)) {
				$blocks[] = $this->summarizeBlock($block);
			}
		}
		else {
			$blocks[] = $this->summarizeBlock($css);
		}

		return $blocks;
	}

	/**
	 * Splits the css into it's rules
	 *
	 * @param $css
	 * @return array
	 */
	private function splitIntoRules($css)
	{
		$rules = preg_split('/}/', trim($this->stripComments($css)));
		array_walk(
			$rules, function (&$s) {
			!empty($s) && $s = trim("$s}");
		});

		return array_filter($rules);
	}

	/**
	 * Counts the selectors in the rule
	 *
	 * @param $rule
	 * @return int
	 */
	private function countSelectorsInRule($rule)
	{
		$lines = explode('{', $this->stripComments($rule));

		return substr_count($lines[0], ',') + 1;
	}

	/**
	 * Extracts the charset from the rule
	 *
	 * @param $css
	 * @return null|string
	 */
	private function extractCharset($css)
	{
		if (preg_match('/^(\@charset[^;]+;)/is', $css, $match)) {
			return $match[1];
		}

		return null;
	}

	/**
	 * Strips the comment
	 *
	 * @param $string
	 * @return mixed
	 */
	private function stripComments($string)
	{
		return preg_replace('~/\*.*?\*/~si', '', $string);
	}
}