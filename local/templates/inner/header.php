<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!doctype html>
<html lang="ru">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-3.5.0.min.js');


    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');

    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>



