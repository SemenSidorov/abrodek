<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="title">Области применения<br /> <span>большепролетных конструкций из клееной древесины:</span></div>
<div class="card-application card-deck owl-carousel">

  <?foreach ($arResult["ITEMS"] as $item) {?>

    <div class="item card">
        <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="card-img-top" alt="<?=$item["NAME"]?>">
        <div class="card-body">
            <h5 class="card-title"><?=$item["NAME"]?></h5>
            <p class="card-text"><?=$item["PREVIEW_TEXT"]?></p>
            <a href="<?=$item["DETAIL_PAGE_URL"]?>">Подробнее</a>
        </div>
    </div>

  <?}?>

</div>
<div class="oll-link">
    <a class="open_blocks">Смотреть все</a>
</div>
