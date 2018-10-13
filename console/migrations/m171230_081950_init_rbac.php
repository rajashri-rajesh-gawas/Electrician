<?php

use yii\db\Migration;

class m171230_081950_init_rbac extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

    // Service Permissions
        //add "Index Services" Permission
        $servicesindex = $auth->createPermission('services/index');
        $servicesindex->description = 'Index Services';
        $auth->add($servicesindex);

        //add "Create Services" Permission
        $servicescreate = $auth->createPermission('services/create');
        $servicescreate->description = 'Create Services';
        $auth->add($servicescreate);

        //add "View Services" Permission
        $servicesview = $auth->createPermission('services/view');
        $servicesview->description = 'View Services';
        $auth->add($servicesview);

        //add "Update Services" Permission
        $servicesupdate = $auth->createPermission('services/update');
        $servicesupdate->description = 'Update Services';
        $auth->add($servicesupdate);

        //add "Delete Services" Permission
        $servicesdelete = $auth->createPermission('services/delete');
        $servicesdelete->description = 'Delete Services';
        $auth->add($servicesdelete);

    // // Stats Permissions
    //     //add "Index Stats" Permission
    //     $statsindex = $auth->createPermission('stats/index');
    //     $statsindex->description = 'Index Stats';
    //     $auth->add($statsindex);

    //     //add "Create Stats" Permission
    //     $statscreate = $auth->createPermission('stats/create');
    //     $statscreate->description = 'Create Stats';
    //     $auth->add($statscreate);

    //     //add "View Stats" Permission
    //     $statsview = $auth->createPermission('stats/view');
    //     $statsview->description = 'View Stats';
    //     $auth->add($statsview);

    //     //add "Update Stats" Permission
    //     $statsupdate = $auth->createPermission('stats/update');
    //     $statsupdate->description = 'Update Stats';
    //     $auth->add($statsupdate);

    //     //add "Delete Stats" Permission
    //     $statsdelete = $auth->createPermission('stats/delete');
    //     $statsdelete->description = 'Delete Stats';
    //     $auth->add($statsdelete);


        //add 'author' role & give this role the "CreatePost" Permission
        // $rajesh = $auth->CreateRole('rajesh');
        // $auth->add($rajesh);
        // $auth->addChild($rajesh,$statsindex);
        // $auth->addChild($rajesh,$statsdelete);

        //add 'author' role & give this role the "CreatePost" Permission
        $author = $auth->CreateRole('author');
        $auth->add($author);
        $auth->addChild($author,$servicesindex);
        $auth->addChild($author,$servicescreate);
        $auth->addChild($author,$servicesview);

        // $auth->addChild($author,$statsindex);
        // $auth->addChild($author,$statsview);

        //add 'admin' role & give this role the "UpdatePost" Permission
        //As well as the permission of the "author" role

        $rajashri = $auth->createRole('rajashri');
        $auth->add($rajashri);
        $auth->addChild($rajashri,$servicesupdate);
        $auth->addChild($rajashri,$servicesdelete);
        $auth->addChild($rajashri,$author);

        // $auth->addChild($rajashri,$statscreate);
        // $auth->addChild($rajashri,$statsupdate);
        // $auth->addChild($rajashri,$statsdelete);

        //Assign role to users,1 and 2 IDs returned by Identity Interface ::getId()
        //usually implemented in your User model.

        $auth->assign($manasi,3);
        $auth->assign($rajesh,4);
        $auth->assign($author,2);
        $auth->assign($rajashri,1);
    }

    public function safeDown()
    {
        echo "m171230_081950_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171230_081950_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
