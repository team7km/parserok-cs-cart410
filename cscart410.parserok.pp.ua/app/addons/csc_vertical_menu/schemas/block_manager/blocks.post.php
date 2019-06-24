<?php

$schema['vertical_menu'] = array(
    'content' => array(
        'items' => array(
            'type' => 'enum',
            'object' => 'categories',
            'items_function' => 'fn_get_categories',
            'remove_indent' => true,
            'hide_label' => true,
            'fillings' => array(
                'manually' => array(
                    'params' => array(
                        'plain' => true,
                        'simple' => false,
                        'group_by_level' => false,
                    ),
                    'picker' => 'pickers/categories/picker.tpl',
                    'picker_params' => array(
                        'multiple' => true,
                        'use_keys' => 'N',
                        'status' => 'A',
                        'positions' => true,
                    ),
                ),
                'newest' => array(
                    'params' => array(
                        'sort_by' => 'timestamp',
                        'plain' => true,
                        'visible' => true,
                        'simple' => false,
                    ),
                    'period' => array(
                        'type' => 'selectbox',
                        'values' => array(
                            'A' => 'any_date',
                            'D' => 'today',
                            'HC' => 'last_days',
                        ),
                        'default_value' => 'any_date'
                    ),
                    'last_days' => array(
                        'type' => 'input',
                        'default_value' => 1
                    ),
                    'limit' => array(
                        'type' => 'input',
                        'default_value' => 3
                    )
                ),
                'full_tree_cat' => array(
                    'params' => array(
                        'plain' => true,
                        'simple' => false,
                    ),
                    'update_params' => array(
                        'request' => array('%CATEGORY_ID'),
                    ),
                    'settings' => array(
                        'parent_category_id' => array(
                            'type' => 'picker',
                            'default_value' => '0',
                            'picker' => 'pickers/categories/picker.tpl',
                            'picker_params' => array(
                                'multiple' => false,
                                'use_keys' => 'N',
                                'default_name' => __('root_level'),
                            ),
                        ),
                        'sort_by' => array(
                            'type' => 'selectbox',
                            'values' => array(
                                'position' => 'position',
                                'name' => 'name',
                            ),
                            'default_value' => 'position'
                        ),
                    ),
                ),
                'subcategories_tree_cat' => array(
                    'params' => array(
                        'plain' => true,
                        'request' => array(
                            'category_id' => '%CATEGORY_ID%'
                        ),
                        'simple' => false,
                    ),
                    'settings' => array(
                        'sort_by' => array(
                            'type' => 'selectbox',
                            'values' => array(
                                'position' => 'position',
                                'name' => 'name',
                            ),
                            'default_value' => 'position'
                        ),
                    ),
                ),
            ),
        )
    ),
    'templates' => 	'addons/csc_vertical_menu/blocks',
    'wrappers' => 'blocks/wrappers',
    'cache' => array(
        'update_handlers' => array('categories', 'category_descriptions'),
        'session_handlers' => array('%CURRENT_CATEGORY_ID%'),
        'request_handlers' => array('%CATEGORY_ID%')
    ),
);

return $schema;