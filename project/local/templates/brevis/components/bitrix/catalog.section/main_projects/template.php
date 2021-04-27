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

if (!empty($arResult['NAV_RESULT']))
{
	$navParams =  array(
		'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
		'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
		'NavNum' => $arResult['NAV_RESULT']->NavNum
	);
}
else
{
	$navParams = array(
		'NavPageCount' => 1,
		'NavPageNomer' => 1,
		'NavNum' => $this->randString()
	);
}

$showPager = false;

if ($arParams['PAGE_ELEMENT_COUNT'] > 0 && $navParams['NavPageCount'] > 1)
{
	$showPager = $arParams['DISPLAY_BOTTOM_PAGER'];
}
?>

<section>
	<div class="container">
		<div class="title title-next title-map">Реализованные <span>проекты</span></div>
		<div class="partners-map" id="partners-map"></div>
	</div>
</section>

<script>
  var elementsToYmap = {
    <?foreach ($arResult["ITEMS"] as $key => $item) {?>
      item_<?=$key?>: {
        name: "<?=$item["NAME"]?>",
        body: '<a href="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$item["ID"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"></a><div style="display: none;"><?foreach ($item["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $pic) {?><a href="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$item["ID"]?>"><img src="<?=$pic["SRC"]?>" alt="<?=$pic["ALT"]?>"></a><?}?></div>',
        latitude: <?=(isset($item["PROPERTIES"]["LATITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LATITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LATITUDE"]["VALUE"] : 55.751574?>,
        longitude: <?=(isset($item["PROPERTIES"]["LONGITUDE"]["VALUE"]) && !empty($item["PROPERTIES"]["LONGITUDE"]["VALUE"])) ? (float) $item["PROPERTIES"]["LONGITUDE"]["VALUE"] : 37.573856?>
      },
    <?}?>
  }
</script>
