<?
foreach ($arResult["ITEMS"] as $key => $item) {
  foreach ($item["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"] as $key1 => $value) {
    $section = CIBlockSection::GetByID($value);
    $arResult["ITEMS"][$key]["PROPERTIES"]["TYPES_CONSTRUCTIONS"]["VALUE"][$key1] = $section->GetNext();
  }
}
