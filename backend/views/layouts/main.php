
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body class="">
    <?= $this->beginBody() ?>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= Url::to(['/']) ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Page</li><!-- /.menu-title -->
                    <li>
                        <a href="<?= Url::to(['slider/index']) ?>" onclick="return false;"> <i class="menu-icon fa fa-image"></i>Slider </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['portovolio/index']) ?>"><i class="menu-icon fa fa-book"></i>Portofolio</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['contact/index']) ?>"><i class="menu-icon fa fa-user"></i>Contact</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['services/index']) ?>"><i class="menu-icon fa fa-cogs"></i>Services</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['about/index']) ?>" onclick="return false"><i class="menu-icon fa fa-th"></i>About</a>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li><a href="<?= Url::to(['site/logout'])?>" data-method="post"><i class="menu-icon fa fa-sign-out"></i>Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./">
                         <?= Html::img('@web/back/images/gowtechno.png',['alt'=>"logo"]) ?>
                    </a>
                    <a class="navbar-brand hidden" href="./">
                        <?= Html::img('@web/back/images/logo2.png',['class'=>""]) ?>
                    </a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?= Html::img('@web/back/images/admin.jpg', ['class' => 'user-avatar rounded-circle']) ?>
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Admin</a>

                            <a class="nav-link" href="<?= Url::to(['site/logout']) ?>" data-method="post"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <?= Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ]) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <?= $content ?>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2021 Gowtechno
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="">Gowtechno</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
 <?php 
    $this->registerJs(
        "
            $('#menuToggle').on('click', function(event) {
        var windowWidth = $(window).width();         
        if (windowWidth<1010) { 
            $('body').removeClass('open'); 
            if (windowWidth<760){ 
                $('#left-panel').slideToggle(); 
            } else {
                $('#left-panel').toggleClass('open-menu');  
            } 
        } else {
            $('body').toggleClass('open');
            $('#left-panel').removeClass('open-menu');  
        } 
             
        }); 

        $(window).on('load resize', function(event) { 
            var windowWidth = $(window).width();         
            if (windowWidth<1010) {
                $('body').addClass('small-device'); 
            } else {
                $('body').removeClass('small-device');  
            } 
            
        });
        ", 
        View::POS_END);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
