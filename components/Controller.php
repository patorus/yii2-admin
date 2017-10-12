<?php
/**
 * Created by PhpStorm.
 * User: pat
 * Date: 12.10.2017
 * Time: 12:50
 */

namespace mdm\admin\components;

use yii\web\Controller as BaseController;
use yii\filters\AccessControl;

class Controller extends BaseController
{
    protected $defaultAccessRoles = ['cdn_staff'];

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => $this->defaultAccessRoles,
                    ],
                ],
            ]
        ];
    }
}