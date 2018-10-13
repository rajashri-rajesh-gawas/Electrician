<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'auth' => [
            'class' => 'common\modules\auth\Module',
        ],
    ],
    'modules' => [
    'admin' => [
        'class' => 'mdm\admin\Module',
        'layout'=>'left-menu'
      
        ]
   
    ],
    // 'as access' => [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         'site/*',
    //         'admin/*',
    //         'services/index',
    //     ]
    // ],
    'components' => [
        'user' => [
            //'class' => 'mdm\admin\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // uncomment if you want to cache RBAC items hierarchy
            // 'cache' => 'cache',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
