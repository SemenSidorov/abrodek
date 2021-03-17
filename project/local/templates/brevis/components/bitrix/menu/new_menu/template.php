<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

<div class="menu">
		<div class="button-menu">
				<span></span><span></span><span></span>
		</div>
		<ul class="menu-list">
			<?foreach ($arResult["ALL_ITEMS"] as $item) {?>
				<li>
					<?if(isset($item["CHILDREN"]) && !empty($item["CHILDREN"])){?>
						<a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a>
						<div class="menu-drop">
								<div class="menu-drop-button">
										<span></span><span></span><span></span>
								</div>
								<ul class="menu-drop-list">
									<?foreach ($item["CHILDREN"] as $child) {?>
										<li><a href="<?=$child["LINK"]?>"><?=$child["TEXT"]?></a></li>
									<?}?>
								</ul>
						</div>
					<?}else{?>
						<a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a>
					<?}?>
				</li>
			<?}?>
		</ul>
</div>
