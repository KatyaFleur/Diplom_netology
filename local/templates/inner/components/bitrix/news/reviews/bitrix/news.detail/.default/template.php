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

<div class="whole-wrap">
        <div class="container box_1170">
            <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?=$arResult["NAME"]?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i><?echo $arResult['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE'];?></a></li>
                        <li><a href="#"><i class="fa fa-date"></i><?=$arResult["DISPLAY_ACTIVE_FROM"]?></a></li>
                     </ul>
                     <p class="excert">
                        <?echo $arResult["DETAIL_TEXT"];?>
                     </p>

                  </div>
               </div>
        </div>
    </div>