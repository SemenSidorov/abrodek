<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="top-slider owl-carousel">

  <?foreach ($arResult["ITEMS"] as $item) {?>

    <div class="item">
        <div class="top-slide-block">
            <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["NAME"]?>">
            <div class="top-slide-cont">
                <div class="top-slide-title"><?=$item["NAME"]?></div>
                <p><?=$item["PREVIEW_TEXT"]?></p>
                <div class="top-slide-link">
                    <a href="<?=$item["PROPERTIES"]["LINK"]["VALUE"]?>">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

  <?}?>

</div>
