<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
    Asset::getInstance()->addCss('/bitrix/css/main/font-awesome.min.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins//fancybox/source/jquery.fancybox.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
	<title><?$APPLICATION->ShowTitle()?></title>

    
    
</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div class="wrapper">

    <header class="header">


            <div class="header_top">







            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1234567890">1-888-123-4567</a></div>
                    </div>
                    <div class="col-lg-4">
                        <p>Free Ground Shipping for Products over $100</p>
                    </div>
                    <div class="col-lg-2">
                        
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>

                    </div>
                    <div class="col-lg-3">
                        <p>My Account</p>
                        <div class="flex-container">
                        <div class="carzina">

                            <a>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>shop</span>
                            </a>


                        </div>
                        <div class="carzina_money">

                            <a>
                                <span>0.00</span>
                            </a>
                        </div>
                    </div>
                    </div>


                </div>
            </div>
        </div>

            <div class="clearfix"></div>

        <div class="header_panel">

            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                       <div class="logo"> <a href=""><p>fondie</p><span>shop</span></a></div>
                    </div>
                    <div class="col-lg-8">
                        kmlklkmlkmlkmlkm
                    </div>
                    <div class="col-lg-2">
                        ljnjlnljn
                    </div>
                </div>
            </div>

</div>






        







        


    </header>


   

    <div class="gg">

    </div>

</div>


	