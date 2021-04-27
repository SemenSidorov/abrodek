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
<div class="container">
	<?foreach ($arResult["ITEMS"] as $item) {?>
	<div class="new_new_news">
		<a href="<?=$item["DETAIL_PAGE_URL"]?>">
	 		<img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
			<div class="info_for_news">
				<p class="news_data">
					<?//=CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($item["DATE_CREATE"], CSite::GetDateFormat()));?>
					<?=$item["ACTIVE_FROM"]?>
				</p>
				<div class="new_name_new">
					<p>
						<?=$item["NAME"]?>
					</p>
				</div>
				<p>
					<?=$item["PREVIEW_TEXT"]?>
				</p>
			</div>
		</a>
	</div>

	<?}?>
	<?=$arResult["NAV_STRING"]?>

</div>
