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
LocalRedirect("vystavochnye-i-torgovye-kompleksy/");
?>

<section class="slide_pages-bot">
  <div class="container">
		<div class="row row-content">
			<!-- <div class="left-sidebar">
					<div class="left-sidebar-block">
							<?/*$APPLICATION->IncludeComponent(
								"bitrix:catalog.smart.filter",
								"new",
								array(
									"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
									"IBLOCK_ID" => $arParams["IBLOCK_ID"],
									"SECTION_ID" => $arCurSection['ID'],
									"FILTER_NAME" => $arParams["FILTER_NAME"],
									"PRICE_CODE" => $arParams["~PRICE_CODE"],
									"CACHE_TYPE" => $arParams["CACHE_TYPE"],
									"CACHE_TIME" => $arParams["CACHE_TIME"],
									"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
									"SAVE_IN_SESSION" => "N",
									"FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
									"XML_EXPORT" => "N",
									"SECTION_TITLE" => "NAME",
									"SECTION_DESCRIPTION" => "DESCRIPTION",
									'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
									"TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
									'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
									'CURRENCY_ID' => $arParams['CURRENCY_ID'],
									"SEF_MODE" => $arParams["SEF_MODE"],
									"SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
									"SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
									"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
									"INSTANT_RELOAD" => $arParams["INSTANT_RELOAD"],
								),
								$component,
								array('HIDE_ICONS' => 'Y')
							);*/?>
					</div>
			</div> -->
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"",
				Array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"NEWS_COUNT" => $arParams["NEWS_COUNT"],
					"SORT_BY1" => $arParams["SORT_BY1"],
					"SORT_ORDER1" => $arParams["SORT_ORDER1"],
					"SORT_BY2" => $arParams["SORT_BY2"],
					"SORT_ORDER2" => $arParams["SORT_ORDER2"],
					"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
					"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
					"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
					"SET_TITLE" => $arParams["SET_TITLE"],
					"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
					"MESSAGE_404" => $arParams["MESSAGE_404"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"SHOW_404" => $arParams["SHOW_404"],
					"FILE_404" => $arParams["FILE_404"],
					"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_FILTER" => $arParams["CACHE_FILTER"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
					"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
					"PAGER_TITLE" => $arParams["PAGER_TITLE"],
					"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
					"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
					"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
					"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
					"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
					"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
					"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
					"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
					"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
					"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
					"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
					"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
					"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
					"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
					"FILTER_NAME" => $arParams["FILTER_NAME"],
					"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
					"CHECK_DATES" => $arParams["CHECK_DATES"],
				),
				$component
			);?>
		</div>
	</div>
</section>
<section class="slide_pages-map" id="slide_pages-map">
</section>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=34601e3e-1295-4462-9627-0abd89b79058" type="text/javascript"></script>
<script>
ymaps.ready(function () {
	var myMap = new ymaps.Map('slide_pages-map', {
			center: [55.751574, 37.573856],
			zoom: 9
		}, {
			searchControlProvider: 'yandex#search'
		});

	for(var key in elementsToYmap){
		var myPlacemark = new ymaps.Placemark([elementsToYmap[key].latitude, elementsToYmap[key].longitude], {
				balloonContentHeader: elementsToYmap[key].name,
				balloonContentBody: elementsToYmap[key].body
			}, {
				iconLayout: 'default#image',
				iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/slide_pages-map1.png',
				iconImageSize: [50, 56],
				iconImageOffset: [-5, -38]
			});
			myMap.geoObjects.add(myPlacemark);
	}
});
</script>
