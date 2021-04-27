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
<section class="slide_pages1">
    <div class="container">
        <div class="title title-pages">Наши услуги</div>

				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"services_list",
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
						"COMPONENT_TEMPLATE" => "oblasty_list",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(0=>"",1=>"",),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "12",
						"IBLOCK_TYPE" => "-",
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
						"PROPERTY_CODE" => array(0=>"",1=>"ICON",),
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
						"STRICT_SECTION_CHECK" => "N",
						"ACTIVE_ELEMENT_ID" => $arResult["ID"]
					)
				);?>
        <!--div class="pages-img-slider-oll-block">
            <div class="pages-img-slider-block">
                <ul class="pages-img-slider-list row justify-content-between owl-carousel">
									<?foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key => $pict) {?>
                    <li class="item"><a href="#img<?=$pict["ID"]?>"><img src="<?=$pict["MIN"]["src"]?>" alt=""></a></li>
									<?}?>
                </ul>
                <div class="pages-img-slider-list-slider pages-img-slider-list-slider1 owl-carousel">
									<?foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key => $pict) {?>
                    <div class="item" data-hash="img<?=$pict["ID"]?>"><img src="<?=$pict["SRC"]?>" alt=""></div>
									<?}?>
                </div>
            </div>
        </div-->
        <?/*
        <div class="pages-desc">
            <ul>
                <li>
                    <span><?=$arResult["PROPERTIES"]["FLOOR"]["VALUE"]?></span>
                    <p>ЭТАЖНОСТЬ</p>
                </li>
                <li>
                    <span><?=$arResult["PROPERTIES"]["TOTAL_AREA"]["VALUE"]?>м<sup>2</sup></span>
                    <p>ОБЩАЯ ПЛОЩАДЬ</p>
                </li>
                <li>
                    <span><?=$arResult["PROPERTIES"]["INTERIOR_AREA"]["VALUE"]?>м<sup>2</sup></span>
                    <p>ПЛОЩАДЬ ВНУТРЕННИХ ПОМЕЩЕНИЙ</p>
                </li>
                <li>
                    <span><?=$arResult["PROPERTIES"]["BALCONIES"]["VALUE"]?>м<sup>2</sup></span>
                    <p>БАЛКОНЫ / НАВЕСЫ / ТЕРРАСЫ</p>
                </li>
            </ul>
        </div>
        */?>
        <div class="pages-cont">
            <?=str_replace('#SITE_TEMPLATE_PATH#', SITE_TEMPLATE_PATH, $arResult["~DETAIL_TEXT"])?>
        </div>
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
        		"FIELD_CODE" => array("", ""),
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
        		"PROPERTY_CODE" => array("LINK", ""),
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
