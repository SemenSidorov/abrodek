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
<section class="slide_1">
    <div class="container">
				<div class="title">Области применения<br /> <span>большепролетных конструкций из клееной древесины:</span></div>
				<div class="card-application card-deck owl-carousel">

				  <?foreach ($arResult["SECTIONS"] as $item) {?>

				    <div class="item card">
				        <img src="<?=$item["DETAIL_PICTURE"]["SRC"]?>" class="card-img-top" alt="<?=$item["NAME"]?>">
				        <div class="card-body">
				            <h5 class="card-title"><?=$item["NAME"]?></h5>
				            <p class="card-text"><?=$item["DESCRIPTION"]?></p>
				            <a href="<?=$item["SECTION_PAGE_URL"]?>">Подробнее</a>
				        </div>
				    </div>

				  <?}?>

				</div>
		</div>
</section>
