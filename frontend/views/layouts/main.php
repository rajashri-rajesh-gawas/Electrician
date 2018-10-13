<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
<div class="banner jarallax">
<div class="agileinfo-dot">
    <div class="w3ls-banner-info-bottom">
                <div class="container">
                    <div class="banner-address">
                        <div class="banner-address-left">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Rajesh Suresh Gawas Pune.</p>
                        </div>
                        
                        <div class="banner-address-left right">
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 7387092248</p>
                        </div>
                        
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="<?php echo Url::toRoute(['index']);?>">Electrician</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-13" id="cl-effect-13">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo Url::toRoute(['index']);?>">Home</a></li>
                            <li ><a href="<?php echo Url::toRoute(['site/service']);?>">Services</a></li>
                            <li><a href="<?php echo Url::toRoute(['site/project']);?>">Projects</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="<?php echo Url::toRoute(['site/icon']);?>">Icons</a></li>
                                    <li><a href="<?php echo Url::toRoute(['site/typography']);?>">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo Url::toRoute(['site/contact']);?>">Contact</a></li>
                        </ul>
                        <div class="w3_agile_login">
                            <div class="cd-main-header">
                                <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </nav>
                </div>
                </nav>
            </div>
        </div>
            
    </div>
</div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- footer -->
<div class="footer">
        <div class="container-full">
        <h2 class="wthree_head">Subscribe to Newsletter</h2>
                <p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
            
                <div class="news-w3l">
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter Your Email..." required="">
                        <input type="submit" value="Send">
                    </form>
                </div>
            <div class="agile_footer_copy">
                <div class="w3agile_footer_grids">
                    
                    <div class="col-md-4 w3agile_footer_grid">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Wanjale Patil Heritage,C-wing,Flat No.-7<span>,Kondhave Dhawade,NDA Gate,Pune.</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-4 w3agile_footer_grid">
                        <h3>About Us</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
                            non proident, sunt in culpa qui officia deserunt mollit.</span></p>
                    </div>
                    
                    <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                        <h3>Navigation</h3>
                        <ul>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="<?php echo Url::toRoute(['site/service']);?>">Services</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="<?php echo Url::toRoute(['site/project']);?>">Projects</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="<?php echo Url::toRoute(['site/icon']);?>">Web Icons</a></li>
                            <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><a href="<?php echo Url::toRoute(['site/contact']);?>">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            
        </div>
        
    </div>
<!-- //footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
