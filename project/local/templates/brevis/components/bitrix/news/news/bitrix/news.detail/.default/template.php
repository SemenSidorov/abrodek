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
<div class="news-detail">
	<div class="top_block_news">
	<h2 class="name"><?=$arResult["NAME"]?></h2>
	<p class="date"><?=$arResult["DATE_ACTIVE_FROM"]?></p>
	</div>
	<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="detail_news_pic">
	<p class="detail_news_text">
		<?=$arResult["DETAIL_TEXT"]?>
	</p>
	</div>
	</div>