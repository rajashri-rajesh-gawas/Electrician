<?php


/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;


$this->title = 'Electrical';
?>
<div class="site-index">

    <!-- <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="body-content">

<div class="w3layouts-banner">
                <div class="container">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="agileits_w3layouts_banner_info">
                                        <h3>Electrical & Mechanical Services </h3>
                                        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits_w3layouts_banner_info">
                                        <h3>Safety In The Home</h3>
                                        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits_w3layouts_banner_info">
                                        <h3>Tools & Specialist Equipment</h3>
                                        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </section>
            
                </div>
</div>



    <div class="container">  
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Welcome to Electrical Services</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
        </div>
        <div class="w3layouts_skills_grids w3layouts_featured_services_grids">
            <div class="col-md-6 w3_featured_services_right">
                <img src="images/2.jpg" alt=" " class="img-responsive">
            </div>
            <div class="col-md-6 w3_featured_services_left">
                <div class="w3_featured_services_left_grid">
                    
                    <?php
                        foreach ($ele as $key) {
                    ?>
                    <div class="col-xs-4 w3_featured_services_left_gridl">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <i class="hi-icon fa-bolt <?php echo $key['icon']; ?>"> </i>
                        </div>
                    </div>
                   
                    <div class="col-xs-8 w3_featured_services_left_gridr">
                        
                        <h3><?php echo $key['heading'];?></h3>
                        <p><?php echo $key['description'];?></p>
                    </div>
                  
                    <?php
                        }
                    ?>          
                <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- //services -->

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="agileits_heading_section">
                <h3 class="wthree_head">Electrical Supply Services</h3>
                <p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
            </div>
            
            <div class="agileits_banner_bottom_grid_three">
                <?php
                    foreach ($sup as $key) {
                ?>
                <div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
                    <div class="wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="image/supply/<?= $key->image_file ?>" alt=" " class="img-responsive" width="100%" height="250px">
                                <figcaption>
                                    <h3><?php echo $key['heading'];?></h3>
                                    <p><?php echo $key['description'];?></p>
                                </figcaption>
                        </figure>
                    </div>
                    <p class="w3_agileits_para">Pellentesque vehicula augue eget nisl ullamcorper, 
                        molestie blandit ipsum auctor. Mauris volutpat augue dolor.</p>
                </div>
                <?php
                    }
                ?>    
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //banner-bottom -->
<!-- stats -->
    <div class="stats">
        <div class="container">
            <?php
                foreach ($sta as $key) {
            ?>
                <div class="col-md-3 w3_counter_grid">
                    <div class="w3_agileits_counter_grid">
                        <i class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></i>
                    </div>
                    <p class="counter"><?php echo $key['description'];?></p>
                    <h3><?php echo $key['heading'];?></h3>
                </div>
            <?php
                }
            ?> 
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //stats -->
<!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
<!-- //stats -->
<!-- team -->
    <div class="banner-bottom">
        <div class="container">
            <div class="agileits_heading_section">
                <h3 class="wthree_head">meet our team</h3>
                <p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
            </div>
            <div class="w3ls_banner_bottom_grids">
            <?php
                foreach ($teams as $key) {
            ?>
                <div class="col-md-3 agile_team_grid">
                    <div class="agileits_w3layouts_team_grid">
                        <ul class="agileinfo_social_icons">
                            <li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true" <?php echo $key['fb_link']; ?>></i></a></li>
                            <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true" <?php echo $key['twitter_link']; ?>></i></a></li>
                            <li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true" <?php echo $key['google_plus_link']; ?>></i></a></li>
                        </ul>
                        <img src="image/team/<?= $key->image_file ?>" alt=" " class="img-responsive" width="100%" height="350px">
                    </div>
                    <h4><?php echo $key['name'];?></h4>
                    <p><?php echo $key['designation'];?></p>
                </div>
            <?php
                }
            ?> 
            <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    </div>
</div>
