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
            <div class="section-top-border">
                <h3 class="mb-30">Расписание мероприятий</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="date">Дата</div>
                            <div class="title">Название</div>
                            <div class="agenda">Программа</div>
                            <div class="detail">Регистрация</div>
                        </div>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

                        <div class="table-row">
                            <div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
                            <div class="title"><?echo $arItem["NAME"]?></div>
                            <div class="agenda">
                         <?echo $arItem["PREVIEW_TEXT"];?>
                            </div>
                            <div class="detail">
                                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="genric-btn success medium">Подробнее</a>
                            </div>
</div>


<?endforeach;?>

                        </div>
</div>
            </div>
        </div>
    </div>

