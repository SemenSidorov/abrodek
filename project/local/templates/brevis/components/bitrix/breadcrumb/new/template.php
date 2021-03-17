<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Главная</a></li>';
$itemSize = count($arResult);

foreach ($arResult as $index => $item) {
	$title = htmlspecialcharsex($item["TITLE"]);

	if(strpos($strReturn, $title) === false){

		if($item["LINK"] <> "" && $index != $itemSize-1 && $APPLICATION->GetCurPage() !== $item["LINK"])
		{
			$strReturn .= '<li class="breadcrumb-item"><a href="'.$item["LINK"].'">'.$title.'</a></li>';
		}
		else
		{
			$strReturn .= '<li class="breadcrumb-item active" aria-current="page">'.$title.'</li>';
			break;
		}
	}
}

$strReturn .= '</ol></nav>';

return $strReturn;
