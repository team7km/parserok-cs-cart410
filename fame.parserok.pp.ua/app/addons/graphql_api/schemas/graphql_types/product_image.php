<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Addons\GraphqlApi\Type;

$schema = [
    'name'        => 'ProductImage',
    'description' => 'Represents a product image',
    'fields'      => [
        'pair_id'     => [
            'type'        => Type::int(),
            'description' => 'Image pair ID',
        ],
        'image_id'    => [
            'type'        => Type::int(),
            'description' => 'Image ID',
        ],
        'detailed_id' => [
            'type'        => Type::int(),
            'description' => 'Detailed image ID',
        ],
        'position'    => [
            'type'        => Type::int(),
            'description' => 'Image order',
        ],
        'detailed'    => [
            'type'        => Type::resolveType('image'),
            'description' => 'Detailed image',
        ],
        'icon'        => [
            'type'        => Type::resolveType('image'),
            'description' => 'Image icon',
        ],
    ],
];

return $schema;
