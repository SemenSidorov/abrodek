<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Конструкции из клееной древесины - АРБОДЭК");
$APPLICATION->SetPageProperty("keywords", "Конструкции из клееной древесины - АРБОДЭК");
$APPLICATION->SetTitle("Конструкции из клееной древесины - АРБОДЭК");?><section class="slide_1">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"banner_main",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("LINK",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"oblast",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("ID","CODE","XML_ID","NAME","SORT","DESCRIPTION","PICTURE","DETAIL_PICTURE","IBLOCK_TYPE_ID","IBLOCK_ID","IBLOCK_CODE","IBLOCK_EXTERNAL_ID","DATE_CREATE","CREATED_BY","TIMESTAMP_X","MODIFIED_BY",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);*/?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"oblast",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("BALCONIES","YEAR","LONGITUDE","MOUNTING","TOTAL_AREA","INTERIOR_AREA","PRODUCTION","SIZE","REGION","PRICE","LATITUDE","FLOOR",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>

<div class="container">
    <div class="preim_clay">
        <div class="title">Преимущества несущих конструкций<br /> <span>из клееной древесины</span></div>
        <div class="blocks_preim_clay">
            <div class="block_preim">
                <div><img src="/local/templates/brevis/pics/green-energy.png"></div>
                <p>Существенно повышает энергосберегающие свойства за счет уменьшения числа стыков в стеновых конструкциях.</p>
            </div>
            <div class="block_preim">
                <div><img src="/local/templates/brevis/pics/chain.png"></div>
                <p>Добавляет свободы для монтажа установочных элементов электрики, сантехники, мебели.</p>
            </div>
            <div class="block_preim">
                <div><img src="/local/templates/brevis/pics/reduce.png"></div>
                <p>Сокращает число сборочных операций за счет уменьшения межвенцовых соединений.</p>
            </div>
            <div class="block_preim">
                <div><img src="/local/templates/brevis/pics/back-in-time.png"></div>
                <p>Экономит время и стоимость строительства.</p>
            </div>
        </div>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main_brus.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/main_types_structures.php"
	)
);?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"types_structures",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array("",""),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array("",""),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LIST"
	)
);*/?>

 </section>
<section class="slide_4">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"advantages",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
</section>
<?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_map_oblasty",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("BALCONIES","YEAR","LONGITUDE","MOUNTING","TOTAL_AREA","INTERIOR_AREA","PRODUCTION","SIZE","REGION","PRICE","LATITUDE","FLOOR",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);*/?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=34601e3e-1295-4462-9627-0abd89b79058" type="text/javascript"></script>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"main_projects",
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
		"COMPONENT_TEMPLATE" => "projects",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
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
		"LABEL_PROP" => array(),
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
		"OFFERS_LIMIT" => "12",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "new",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "12",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
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
<script>
  var elementsToYmap = {
		<?
			$result = CIBlockElement::GetList([], ["ACTIVE" => "Y", "IBLOCK_ID" => 10], false, false, ["ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "PROPERTY_LATITUDE", "PROPERTY_LONGITUDE", "PROPERTY_ADD_PICTURES"]);
			while($item = $result->GetNext()){
				$item["PREVIEW_PICTURE"] = CFile::GetFileArray($item["PREVIEW_PICTURE"]);
				foreach ($item["PROPERTY_ADD_PICTURES_VALUE"] as $key => $pic) {
					$item["PROPERTY_ADD_PICTURES_VALUE"][$key] = CFile::GetFileArray($pic);
				}
		?>
      item_<?=$item["ID"]?>: {
        name: "<?=$item["NAME"]?>",
        body: '<a href="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$item["ID"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>"></a><div style="display: none;"><?foreach ($item["PROPERTY_ADD_PICTURES_VALUE"] as $pic) {?><a href="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$item["ID"]?>"><img src="<?=$pic["SRC"]?>" alt="<?=$pic["ALT"]?>"></a><?}?></div>',
        latitude: <?=(isset($item["PROPERTY_LATITUDE_VALUE"]) && !empty($item["PROPERTY_LATITUDE_VALUE"])) ? (float) $item["PROPERTY_LATITUDE_VALUE"] : 55.751574?>,
        longitude: <?=(isset($item["PROPERTY_LONGITUDE_VALUE"]) && !empty($item["PROPERTY_LONGITUDE_VALUE"])) ? (float) $item["PROPERTY_LONGITUDE_VALUE"] : 37.573856?>
      },
    <?}?>
  }
</script>
<script>
ymaps.ready(function () {
	var myMap = new ymaps.Map('partners-map', {
			center: [64.411383, 99.916238],
			zoom: 3
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
				iconImageSize: [50, 60],
				iconImageOffset: [-25, -60]
			});
			myMap.geoObjects.add(myPlacemark);
	}
});
</script>
<?/*
	$result = CIBlockElement::GetList([], ["IBLOCK_ID" => 10, "!PROPERTY_LATITUDE" => false, "!PROPERTY_LONGITUDE" => false], false, false, ["PROPERTY_ADD_PICTURES", "PROPERTY_LATITUDE", "PROPERTY_LONGITUDE", "NAME", "PREVIEW_PICTURE", "ID"]);
	$result_items = [];
	while($res = $result->GetNext()){
		$pictures = [];
		foreach ($res["PROPERTY_ADD_PICTURES_VALUE"] as $picture) {
			$pictures[] = CFile::GetFileArray($picture);
		}
		$result_items[] = [
			"ID" => $res["ID"],
			"LATITUDE" => $res["PROPERTY_LATITUDE_VALUE"],
			"LONGITUDE" => $res["PROPERTY_LONGITUDE_VALUE"],
			"NAME" => $res["NAME"],
			"PREVIEW_PICTURE" => CFile::GetFileArray($res["PREVIEW_PICTURE"]),
			"PICTURES" => $pictures
		];
	}
?>
<script>
ymaps.ready(function () {
	var myPartnersMap = new ymaps.Map('partners-map', {
			center: [55.751574, 37.573856],
			zoom: 9
		}, {
			searchControlProvider: 'yandex#search'
		});
	<?foreach ($result_items as $res) {?>
		var myPartnersPlacemark = new ymaps.Placemark([<?=$res["LATITUDE"]?>, <?=$res["LONGITUDE"]?>], {
				balloonContentHeader: <?=$res["NAME"]?>,
				balloonContentBody: '<a href="<?=$res["PICTURES"][0]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$res["ID"]?>"><img src="<?=$res["PICTURES"][0]["SRC"]?>" alt="<?=$res["NAME"]?>"></a><div style="display: none;"><?foreach ($res["PICTURES"] as $pic) {?><a href="<?=$res["PICTURES"][0]["SRC"]?>" class="fancybox" data-fancybox="card_map<?=$res["ID"]?>"><img src="<?=$pic["SRC"]?>" alt="<?=$res["NAME"]?>"></a><?}?></div>'
			}, {
				iconLayout: 'default#image',
				iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/slide_pages-map1.png',
				iconImageSize: [50, 60],
				iconImageOffset: [-25, -60]
			});
			myPartnersMap.geoObjects.add(myPartnersPlacemark);
		<?}?>
});
</script>
*/?>
<!--<section class="partners-map" id="partners-map">
    <div class="container">
        <div class="title title-next title-map">Наши <span>готовые проекты</span></div>
        <div class="partners-map-block">
            <div class="partners-map-img">
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/partners-map-img.jpg" alt="">
            </div>
            <div class="partners-map-cont">
                <span>Физкультурно-<br /> оздоровительный комплекс</span>
                <ul>
                    <li>Этажность <span>1</span></li>
                    <li>Общая площадь <span>71м<sup>2</sup></span></li>
                    <li>Площадь внутренних помещений <span>16м<sup>2</sup></span></li>
                    <li>Балконы/ навесы/ терассы <span>54м<sup>2</sup></span></li>
                </ul>
                <div class="partners-map-link">
                    <a href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<script>
// ymaps.ready(function () {
//   var myMap = new ymaps.Map('partners-map', {
//       center: [63.374139, 97.722723],
//       zoom: 3
//     }, {
//       searchControlProvider: 'yandex#search'
//     }),
//
//     // Создаём макет содержимого.
//     MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
//       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
//     ),
//
//     myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
//       hintContent: 'Собственный значок метки',
//       balloonContent: 'Это красивая метка'
//     }, {
//       // Опции.
//       // Необходимо указать данный тип макета.
//       iconLayout: 'default#image',
//       // Своё изображение иконки метки.
//       iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/point.png',
//       // Размеры метки.
//       iconImageSize: [34, 42],
//       // Смещение левого верхнего угла иконки относительно
//       // её "ножки" (точки привязки).
//       iconImageOffset: [-5, -38]
//     }),
//
//     myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
//       hintContent: 'Собственный значок метки с контентом',
//       balloonContent: 'Это красивая метка',
//       iconContent: ''
//     }, {
//       // Опции.
//       // Необходимо указать данный тип макета.
//       iconLayout: 'default#imageWithContent',
//       // Своё изображение иконки метки.
//       iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/point2.png',
//       // Размеры метки.
//       iconImageSize: [41, 42],
//       // Смещение левого верхнего угла иконки относительно
//       // её "ножки" (точки привязки).
//       iconImageOffset: [-24, -24],
//       // Смещение слоя с содержимым относительно слоя с картинкой.
//       iconContentOffset: [15, 15],
//       // Макет содержимого.
//       iconContentLayout: MyIconContentLayout
//     });
//
//   myMap.geoObjects
//     .add(myPlacemark)
//     .add(myPlacemarkWithContent);
// });

ymaps.ready(function () {
  var myMap = new ymaps.Map('slide_map', {
      center: [55.720846, 37.777737],
      zoom: 15
    }, {
      searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: 'Собственный значок метки',
      balloonContent: 'ООО "АРБОДЕК" Большепролетные конструкции из клееной древесины'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/slide_pages-map1.png',
      // Размеры метки.
			iconImageSize: [50, 60],
			iconImageOffset: [-25, -60]
    }),

    myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
      hintContent: 'Собственный значок метки с контентом',
      balloonContent: 'Это красивая метка',
      iconContent: ''
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#imageWithContent',
      // Своё изображение иконки метки.
      iconImageHref: '',
      // Размеры метки.
			iconImageSize: [50, 60],
			iconImageOffset: [-25, -60],
      // Смещение слоя с содержимым относительно слоя с картинкой.
      iconContentOffset: [15, 15],
      // Макет содержимого.
      iconContentLayout: MyIconContentLayout
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});
</script> <!--section class="slide_5">
<div class="container">
	<div class="title title-next">
		КОНСУЛЬТАЦИЯ специалиста
	</div>
	<div class="order-block">
		<div class="message">
			<?=$_COOKIE["send"] ? $_COOKIE["send"] : ''?>
		</div>
		<div class="errors" style="color: red;">
			<?=$_COOKIE["errors"] ? $_COOKIE["errors"] : ''?>
		</div>
		<form action="<span id=" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;" class="bxhtmled-surrogate">
			<?=SITE_TEMPLATE_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/ajax.php" method="post"&gt; <input required="" type="text" name="name" placeholder="Ваше имя"> <input required="" type="text" name="phone" placeholder="Ваш телефон"> <input type="text" name="time" placeholder="Удобное время для звонка"> <label> <input required="" name="checkbox" type="checkbox"> <span>Выражаю согласие на обработку моих персональных<br>
			 данных и соглашаюсь с политикой конфиденциальности.</span> </label> <input type="submit" value="Отправить">
		</form>
	</div>
 <img src="/local/templates/brevis/pics/order-img.png" alt="" class="order-img">
</div>
 </section-->
<section class="slide_8888">
	<div class="container">
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"trust",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("LINK",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

	</div>

</section>



 <section class="our_map">
 	<div class="container">
<div class="slide_map-block">
		<div class="slide_map-title">
			Контакты
		</div>
		<ul>
			<li class="location">г. Москва, ул. 2-я Институтская,<br> д. 6, стр. 1, оф. 501</li>
			<li class="time">Пн-Пт: с 10 до 18</li>
			<li class="phone"><a href="tel:+74951774567">+7 (495) 177-45-67</a></li>
			<li class="mail"><a href="mailto:info@arbodek.ru">info@arbodek.ru</a></li>
		</ul>
	</div>
 <div class="slide_map" id="slide_map">
 </div>
</div>
</section>


 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
