<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

 <div class="about_area">
            <div class="icon_1 d-none d-md-block">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icon/1.png" alt="">
            </div>
            <div class="icon_2 d-none d-md-block">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/icon/2.png" alt="">
            </div>
            <div class="icon_3 d-none d-md-block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/3.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_info_wrap">
                                <h3><?=$arResult["NAME"]?></h3>
                                <span class="long_dash"></span>
                            <p><?echo $arResult["DETAIL_TEXT"];?></p>
                            <ul class="food_list">
                                <li>
                                    <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/svg_icon/salad.svg" alt="">
                                    <span><?=$arResult['DISPLAY_PROPERTIES']['DATA']['DISPLAY_VALUE'];?> </span>
                                </li>
                                <li>
                                    <img src="<?php echo SITE_TEMPLATE_PATH ?>/img/svg_icon/tray.svg" alt="">
                                    <span>Участие <?=$arResult['PROPERTIES']['COST']['VALUE']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_img">
                            <div class="img_1">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/about/big.png" alt="">rr
                            </div>
                            <div class="small_img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/about/small.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Фото с прошлых мероприятий</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/1.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/2.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/3.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/4.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/5.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="<?=SITE_TEMPLATE_PATH?>/img/gallery/6.png"></a>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/gallery/6.png" alt="">
        </div>
    </div>

