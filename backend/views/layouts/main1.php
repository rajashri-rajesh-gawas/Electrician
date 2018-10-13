<?php
/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use mdm\admin\components\MenuHelper;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""<?php echo Url::toRoute('site/index');?>">
                        Electrician
                    </a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <!--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li> -->
                    <!-- <li class="divider"></li> -->
                        <li><?= Html::a('Logout', ['admin/logout'], ['data-method' => 'post']) ?>
                    </li>
                    <!-- <li>
                        <a href="<?php echo Url::toRoute('admin/login');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li> -->
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo Url::toRoute('/site/login');?>"><i class="fa fa-login fa-fw"></i> Login</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/site/logout') ;?>"><i class="fa fa-logout fa-fw"></i> Logout</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('site/index');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin/menu');?>"><i class="fa fa-phone" aria-hidden="true"></i> Menu</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin');?>"><i class="fa fa-weixin" aria-hidden="true"></i> Assignment</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin/role');?>"><i class="fa fa-weixin" aria-hidden="true"></i> Role</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin/permission');?>"><i class="fa fa-gear" aria-hidden="true"></i> Permission </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin/route');?>"><i class="fa fa-phone" aria-hidden="true"></i> Route</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/admin/rule');?>"><i class="fa fa-phone" aria-hidden="true"></i> Rule</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/services/index');?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Services </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/projects/index');?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Projects </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/icons/index');?>"><i class="fa fa-calendar" aria-hidden="true"></i>  Icons </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/electric/index');?>"><i class="fa fa-picture-o" aria-hidden="true"></i> Electric </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/supply/index');?>"><i class="fa fa-picture-o" aria-hidden="true"></i> Supply </a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/stats/index');?>"><i class="fa fa-money" aria-hidden="true"></i> Stats</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/teams/index');?>"><i class="fa fa-money" aria-hidden="true"></i> Teams</a>
                    </li>
                    <li>
                        <a href="<?php echo Url::toRoute('/electrician/index');?>">
                            <i class="fa fa-weixin" aria-hidden="true"></i>
                        Electrician</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


