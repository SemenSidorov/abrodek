<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult["ITEMS"] as $key => $item) {
  foreach ($item["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"] as $key1 => $value) {
    $section = CIBlockSection::GetByID($value);
    $arResult["ITEMS"][$key]["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"][$key1] = $section->GetNext();
  }
  foreach ($item["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key1 => $value) {
    $arResult["ITEMS"][$key]["PROPERTIES"]["ADD_PICTURES"]["VALUE"][$key1] = CFile::GetFileArray($value);
    $arResult["ITEMS"][$key]["PROPERTIES"]["ADD_MIN_PICTURES"]["VALUE"][$key1] = CFile::ResizeImageGet(CFile::GetFileArray($value), ['width'=>145, 'height'=>115], BX_RESIZE_IMAGE_PROPORTIONAL);
  }
}
