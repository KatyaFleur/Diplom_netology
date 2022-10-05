<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!doctype html>
<html lang="ru">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-3.5.0.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery-1.12.4.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/popper.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/isotope.pkgd.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/ajax-form.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.counterup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/imagesloaded.pkgd.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scrollIt.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.scrollUp.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/wow.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/gijgo.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/nice-select.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.slicknav.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins.js');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/contact.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.ajaxchimp.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.form.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.validate.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/mail-script.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/themify-icons.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/gijgo.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/nice-select.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/flaticon.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slicknav.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');


    $APPLICATION->ShowHead();
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>img/favicon.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>




