<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="application-slider owl-carousel">
  <?$bool = true;?>
  <?foreach ($arResult["SECTIONS"] as $item) {?>
    <div class="item">
        <a href="<?=$item["SECTION_PAGE_URL"]?>" class="application-slider-block <?=$arParams["ACTIVE_SECTION_ID"] == $item["ID"] ? "active" : ''?>">
            <span class="application-slider-img"><img src="<?=$item["PICTURE"]["SRC"]?>" alt="<?=$item["PICTURE"]["ALT"]?>"></span>
            <span class="application-slider-cont"><?=$item["NAME"]?></span>
        </a>
    </div>
    <?$bool = false;?>
  <?}?>
</div>
