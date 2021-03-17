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
<div class="catalog-page">
    <div class="catalog-wrapper">
      <?foreach ($arResult["ITEMS"] as $item) {?>
        <div class="item">
			<div class="catalog__img">
				<a href="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="card<?=$item["ID"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"></a>
			</div>
			<div class="catalog-hidden-img">
								<?foreach ($item["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $pic) {?>
				<a href="<?=$pic["SRC"]?>" class="fancybox" data-fancybox="card<?=$item["ID"]?>"><img src="<?=$pic["SRC"]?>" alt="<?=$pic["ALT"]?>"></a>
								<?}?>
			</div>
			<div class="catalog-page__title"><?=$item["NAME"]?></div>
        </div>
      <?}?>
    </div>
</div>

<script>
  var elementsToYmap = {
    <?foreach ($arResult["ITEMS"] as $key => $item) {?>
      item_<?=$key?>: {
        name: "<?=$item["NAME"]?>",
        body: '<br><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt=""><br>',
        latitude: <?=(isset($item["PROPERTIES"]["LATITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LATITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LATITUDE"]["VALUE"] : 55.751574?>,
        longitude: <?=(isset($item["PROPERTIES"]["LONGITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LONGITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LONGITUDE"]["VALUE"] : 37.573856?>
      },
    <?}?>
  }
</script>
