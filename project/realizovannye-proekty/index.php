<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Реализованные проекты");
?>

<section class="slide_pages-bot">
  <div class="container">
		<div class="row-content">
			<div class="left-sidebar">
				<div class="left-sidebar-block">
					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.smart.filter",
						"new",
						Array(
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"DISPLAY_ELEMENT_COUNT" => "Y",
							"FILTER_NAME" => "arrFilter",
							"FILTER_VIEW_MODE" => "vertical",
							"IBLOCK_ID" => "10",
							"IBLOCK_TYPE" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"POPUP_POSITION" => "left",
							"PREFILTER_NAME" => "smartPreFilter",
							"SAVE_IN_SESSION" => "N",
							"SECTION_CODE" => "",
							"SECTION_DESCRIPTION" => "-",
							"SECTION_ID" => "",
							"SECTION_TITLE" => "-",
							"SEF_MODE" => "N",
							"TEMPLATE_THEME" => "blue",
							"XML_EXPORT" => "N"
						)
					);?>
				</div>
			</div>
		
		<div class="left-sidebar">
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"projects",
			Array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "-",
				"ADD_PROPERTIES_TO_BASKET" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BACKGROUND_IMAGE" => "-",
				"BASKET_URL" => "/personal/basket.php",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPATIBLE_MODE" => "Y",
				"DETAIL_URL" => "",
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILTER_NAME" => "arrFilter",
				"IBLOCK_ID" => "10",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_SUBSECTIONS" => "Y",
				"LABEL_PROP" => "",
				"LAZY_LOAD" => "N",
				"LINE_ELEMENT_COUNT" => "3",
				"LOAD_ON_SCROLL" => "N",
				"MESSAGE_404" => "",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"OFFERS_LIMIT" => "5",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Товары",
				"PAGE_ELEMENT_COUNT" => "18",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRICE_CODE" => "",
				"PRICE_VAT_INCLUDE" => "N",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
				"PROPERTY_CODE_MOBILE" => array(0=>"TYPES_CONSTRUCTIONS",1=>"AREAS_USE",2=>"ADD_PICTURES",3=>"PRICE",4=>"REGION",5=>"YEAR",),
				"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "",
				"SECTION_ID" => "",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
				"SEF_MODE" => "N",
				"SET_BROWSER_TITLE" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SHOW_ALL_WO_SECTION" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"SHOW_SLIDER" => "N",
				"SLIDER_INTERVAL" => "3000",
				"SLIDER_PROGRESS" => "N",
				"TEMPLATE_THEME" => "blue",
				"USE_ENHANCED_ECOMMERCE" => "N",
				"USE_MAIN_ELEMENT_SECTION" => "N",
				"USE_PRICE_COUNT" => "N",
				"USE_PRODUCT_QUANTITY" => "N"
			)
		);?>
		</div>
		</div>
	</div>
</section>
<div class="container">
<section class="slide_pages-map" id="slide_pages-map">
</section>
</div>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
