<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="title title-next">Нам <span>доверяют</span></div>
<div class="partners-slider owl-carousel">
  <?foreach ($arResult["ITEMS"] as $item) {?>
    <div class="item">
        <div class="partners-slider-block">
            <a href="<?=$item["PROPERTIES"]["LINK"]["VALUE"]?>" class="partners-slider-img"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["NAME"]?>"></a>
            <p><?=$item["NAME"]?></p>
        </div>
    </div>
  <?}?>
</div>
