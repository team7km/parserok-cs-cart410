<?php

$schema['addons/csc_vertical_menu/blocks/vertical_menu_block.tpl'] = array (
        'fillings' => array('full_tree_cat', 'dynamic_tree_cat'),
        'params' => array (
            'plain' => false,
            'group_by_level' => true,
            'max_nesting_level' => 999,
            'request' => array (
                'active_category_id' => '%CATEGORY_ID%',
            ),
        )
    );

return $schema;