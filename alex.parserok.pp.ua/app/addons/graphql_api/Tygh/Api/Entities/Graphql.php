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

namespace Tygh\Api\Entities;

use Exception;
use Tygh\Addons\GraphqlApi\Context;
use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Tygh;

class Graphql extends AEntity
{
    public function index($id = 0, $params = [])
    {
        if (empty($params['query'])) {
            return ['status' => Response::STATUS_BAD_REQUEST];
        }

        /** @var \Tygh\Addons\GraphqlApi\Api $api */
        $api = Tygh::$app['graphql_api'];

        try {
            $variables = [];
            if (!empty($params['variables'])) {
                $variables = json_decode($params['variables'], true);
            }
            $variables = $variables ?: [];

            $context = new Context(Tygh::$app, $this->auth, static::getLanguageCode($params));

            $result = $api->execute($params['query'], $variables, $context);

            $result->setErrorsHandler(function ($errors, callable $formatter) {
                return array_column($errors, 'message');
            });
            $result = $result->toArray();

            return [
                'status' => Response::STATUS_OK,
                'data'   => $result
            ];
        } catch (Exception $exception) {
            return ['status' => Response::STATUS_INTERNAL_SERVER_ERROR];
        }
    }

    /**
     * @inheritDoc
     */
    public function create($params)
    {
        return $this->index(0 ,$params);
    }

    /**
     * @inheritDoc
     */
    public function update($id, $params)
    {
        return $this->index(0 ,$params);
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        return [
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
        ];
    }

    /**
     * @inheritDoc
     */
    public function privileges()
    {
        return [
            'index'  => true,
            'create' => true,
            'update' => true,
        ];
    }

    /**
     * @inheritDoc
     */
    public function privilegesCustomer()
    {
        return [
            'index'  => true,
            'create' => true,
            'update' => true,
        ];
    }
}
