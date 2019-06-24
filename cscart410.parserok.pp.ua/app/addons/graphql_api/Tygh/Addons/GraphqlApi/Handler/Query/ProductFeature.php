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

namespace Tygh\Addons\GraphqlApi\Handler\Query;

use Tygh\Addons\GraphqlApi\Context;
use Tygh\Addons\GraphqlApi\Handler\IHandler;

class ProductFeature implements IHandler
{
    /**
     * @var mixed $source
     */
    protected $source;

    /**
     * @var array
     */
    protected $args;

    /**
     * @var \Tygh\Addons\GraphqlApi\Context
     */
    protected $context;

    public function __construct($source, array $args, Context $context)
    {
        $this->source = $source;
        $this->args = $args;
        $this->context = $context;
    }

    public function run()
    {
        $feature_id = $this->args['id'];

        /** @var \Tygh\Database\Connection $db */
        $db = $this->context->getApp()['db'];

        /**
         * FIXME: Feature group data can't be obtained with \fn_get_product_features,
         * unless feature type is explicitly specified as \Tygh\Enum\ProductFeatures::GROUP
         */
        $feature_type = $db->getField('SELECT feature_type FROM ?:product_features WHERE feature_id = ?i', $this->args['id']);

        list($features,) = fn_get_product_features([
            'feature_id'    => $feature_id,
            'feature_types' => $feature_type,
        ], 0, $this->context->getLanguageCode());

        $feature = reset($features);

        return $feature;
    }

    public function getPrivilege()
    {
        return 'view_catalog';
    }

    public function getCustomerPrivilege()
    {
        return false;
    }
}
