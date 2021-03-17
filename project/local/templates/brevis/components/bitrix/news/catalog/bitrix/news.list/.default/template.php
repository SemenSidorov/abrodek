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

<script>
  // location = "<?=$arResult["ITEMS"][0]["DETAIL_PAGE_URL"]?>"
</script>
<?/*
<div class="card-application card-deck owl-carousel">

  <?foreach ($arResult["ITEMS"] as $item) {?>

    <div class="item card">
      <?if($item["PREVIEW_PICTURE"]["SRC"]){?>
        <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="card-img-top" alt="<?=$item["NAME"]?>">
      <?}?>
        <div class="card-body">
            <h5 class="card-title"><?=$item["NAME"]?></h5>
            <p class="card-text"><?=$item["PREVIEW_TEXT"]?></p>
            <a href="<?=$item["DETAIL_PAGE_URL"]?>">Подробнее</a>
        </div>
    </div>

  <?}?>

</div>

<!-- <div class="catalog-application">
    <div class="catalog-application__wrapper">
      <?foreach ($arResult["ITEMS"] as $item) {?>
        <div class="item">
            <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="catalog-block">
                <div class="catalog-img">
                    <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>">
                </div>
                <div class="catalog-title"><?=$item["NAME"]?></div>
                <ul>
                    <li>Конструктивная схема: <?foreach($item["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"] as $key => $prop){ if($key === 0){ echo $prop["NAME"]; }else{ echo ', '.$prop["NAME"]; } }?></li>
                    <li>Регион1: <?=$item["PROPERTIES"]["REGION"]["VALUE"]?></li>
                    <li>Размеры: <?=$item["PROPERTIES"]["SIZE"]["VALUE"]?></li>
                </ul>
                <div class="catalog-price"><?=$item["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</div>
                <div class="catalog-link"><span>Подробнее</span></div>
            </a>
        </div>
      <?}?>
    </div>
</div> -->

<script>
  var elementsToYmap = {
    <?foreach ($arResult["ITEMS"] as $key => $item) {?>
      item_<?=$key?>: {
        name: "<?=$item["NAME"]?>",
        body: '<br><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt=""><br>' +
  			'<br><ul>' +
  					'<li>Конструктивная схема: <?foreach($item["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"] as $key => $prop){ if($key === 0){ echo $prop["NAME"]; }else{ echo ', '.$prop["NAME"]; } }?> </li>' +
  					'<li>Регион: <?=$item["PROPERTIES"]["REGION"]["VALUE"]?></li>' +
  					'<li>Размеры: <?=$item["PROPERTIES"]["SIZE"]["VALUE"]?></li>' +
  			'</ul><br>' +
  			'<a href="<?=$item["DETAIL_PAGE_URL"]?>">Подробнее</a>',
        latitude: <?=(isset($item["PROPERTIES"]["LATITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LATITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LATITUDE"]["VALUE"] : 55.751574?>,
        longitude: <?=(isset($item["PROPERTIES"]["LONGITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LONGITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LONGITUDE"]["VALUE"] : 37.573856?>
      },
    <?}?>
  }
</script>
*/?>
