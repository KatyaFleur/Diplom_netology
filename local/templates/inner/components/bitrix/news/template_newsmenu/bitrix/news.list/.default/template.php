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

<div class="row">

<?$i=1;
foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <?{if($i%2==0){?>

<div class="col-md-6 col-lg-6">
    <div class="single_delicious d-flex align-items-center">
        <div class="thumb">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
        </div>
        <div class="info">
            <h3><?echo $arItem["NAME"]?></h3>
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            <span><?echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];?></span>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn primary-border">Подробнее</a>
        </div>
    </div>
</div>

    <?}else{?>
        <div class="col-xl-6 col-md-6 col-lg-6">
            <div class="single_delicious d-flex align-items-center">
                <div class="thumb">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                </div>
                <div class="info">
                    <h3><?echo $arItem["NAME"]?></h3>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                    <span><?echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];?></span>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="genric-btn primary-border">Подробнее</a>
                </div>
            </div>
        </div>

    <?}$i++;}?>

<?endforeach;?>

</div>