<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="application-slider owl-carousel">
  <?$bool = true;?>
  <?foreach ($arResult["ITEMS"] as $item) {?>
    <div class="item">
        <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="application-slider-block <?=$arParams["ACTIVE_ELEMENT_ID"] == $item["ID"] ? "active" : ''?>">
            <span class="application-slider-img"><img src="<?=$item["PROPERTIES"]["ICON"]["RESULT"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"></span>
            <span class="application-slider-cont"><?=$item["NAME"]?></span>
        </a>
    </div>
    <?$bool = false;?>
  <?}?>
</div>
