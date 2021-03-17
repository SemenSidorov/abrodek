<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section>
    <div class="container">
        <div class="title title-next title-map">Наши <span>готовые проекты</span></div>
    <div class="partners-map" id="partners-map">
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=34601e3e-1295-4462-9627-0abd89b79058" type="text/javascript"></script>
</div>
</div>
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
ymaps.ready(function () {
	var myMap = new ymaps.Map('partners-map', {
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
				iconImageHref: '<?=SITE_TEMPLATE_PATH?>/pics/point2.png',
				iconImageSize: [50, 56],
				iconImageOffset: [-5, -38]
			});
			myMap.geoObjects.add(myPlacemark);
	}
});
</script>
</section>