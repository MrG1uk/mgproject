<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\models\Locations;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$locations = Locations::find()->all();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88780212-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-88780212-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TZCF68Q');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Ads: 924440415 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-924440415"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-924440415');
    </script>


    <!--- Start of GetEmails.com code --->
    <script async src="https://s3-us-west-2.amazonaws.com/files.getemails.com/account/NXGHKZW/source/getemails.js"></script>
    <!--- End of GetEmails.com code --->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2369629409812093');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2369629409812093&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body>
<?php $this->beginBody() ?>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 ">
                        <div class="social_media_links">
                            <a href="https://uk-ua.facebook.com/">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/?hl=ru/">
                                <i class="fa fa-instagram "></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> servcen@gmail.com</a></li>
                                <li><a href="#"> <i class="fa fa-phone"></i>555-3535-66</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="<?=Url::to('/')?>">
                                <img style="width: 200px" src="/web/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="<?= Url::to('/')?>">Головна</a></li>
                                    <li><a href="<?= Url::to('/blog')?>">Блог</a></li>
                                    <li><a href="<?= Url::to('/site/forms')?>">Про нас</a></li>
                                    <li><a href="<?= Url::to('/site/faq')?>">FAQ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

        <?= $content ?>

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img style="width: 200px;" src="/web/img/logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            Друзі, моя мета - надавати вам якісно новий рівень обслуговування в сервісному центрі.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="https://uk-ua.facebook.com/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/?hl=ru">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">

                    </div>
                </div>
                <div c
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- link that opens popup -->

<script type='text/javascript'>

</script>
<link href='/web/widget.css' rel=stylesheet>
<script src = '/web/widget.js'type = text/javascript></script>

<script type=text/javascript > Calendly.initBadgeWidget({
        url: "https://calendly.com/healthaide",
        text: "Schedule Consultation",
        color: "#00a2ff",
        textColor: "#ffffff",
        branding: false
    });
</script>
<script src='/web/js/jquery-3.3.1.min.js'></script>
<script src='/web/js/bootstrap.min.js'></script>
<script data-cfasync="false" src="/web/js/form-submision-handler.js"></script>
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px"
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0"
}

$(document).ready(function() {
    var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        } else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    $('[data-toggle="sticky-onscroll"]').each(function() {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper');
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
            stickyToggle(sticky, stickyWrapper, $(this));
        });
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});

</script >
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
