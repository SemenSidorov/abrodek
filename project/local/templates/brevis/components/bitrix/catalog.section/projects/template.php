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




<div class="catalog-page">
    <div class="catalog-wrapper">
      <?foreach ($arResult["ITEMS"] as $item) {?>
        <div class="item">
					<a data-fancybox="inline" data-src="#hidden-content-a-<?=$item["ID"]?>" href="javascript:;" class="btn" onclick="$('.slider-class').slick()">
						<div class="catalog__img">

								<img src="<?=$item['PREVIEW_PICTURE']["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["ALT"]?>">

						</div>

						<div class="catalog-page__title"><?=$item["NAME"]?></div>
					</a>
        </div>
      <?}?>
      <?foreach ($arResult["ITEMS"] as $item) {?>
					<div class="item_sliders">
								<div style="display: none;" id="hidden-content-a-<?=$item["ID"]?>" class="hidden_fancybox">
							        <div class="slider_fancy">
							            <!-- Слайдер -->
							            <div class="swiper-container gallery-top gallery-top-<?=$item["ID"]?>" data-id="<?=$item["ID"]?>">
							                <div class="swiper-wrapper">
												<?foreach ($item["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key => $pic) {?>

													<div class="swiper-slide">
			    										<a data-fancybox="gallery<?=($key+1)?>" href='<?=$pic["SRC"]?>'><img src="<?=$pic['SRC']?>" /></a>
													</div>
												<?}?>
							                </div>
							                <!-- Добавление стрелок -->
							                <div class="swiper-button-next swiper-button-white"></div>
							                <div class="swiper-button-prev swiper-button-white"></div>
							            </div>
							            <!-- Миниатюры для слайдера -->
							            <div class="swiper-container gallery-thumbs gallery-thumbs-<?=$item["ID"]?>" data-id="<?=$item["ID"]?>">
							                <div class="swiper-wrapper">
																<?foreach ($item["PROPERTIES"]["ADD_MIN_PICTURES"]["VALUE"] as $key => $pic) {?>
							                    <div class="swiper-slide" style="background-image: url(<?=$pic['src']?>);"></div>
																<?}?>
							                </div>
							                <!-- Добавление стрелок -->
							                <div class="swiper-button-next swiper-button-white"></div>
							                <div class="swiper-button-prev swiper-button-white"></div>
							            </div>
							        </div>
							        <div class="text_after_slider_fancy">
							            <p>
							                <b><?=$item["NAME"]?></b><br />
							                <?=$item["DETAIL_TEXT"]?>
							            </p>
							        </div>
							    </div>
						</div>
				<?}?>
    </div>
    <?
      if($showPager){
        echo str_replace("Товары", "Проекты", $arResult["NAV_STRING"]);
      }
    ?>
</div>
