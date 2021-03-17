<?
foreach ($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"] as $key => $id) {
  $arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"][$key] = CFile::GetFileArray($id);
  $arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"][$key]["MIN"] = CFile::ResizeImageGet($arResult["PROPERTIES"]["ADD_PICTURES"]["VALUE"][$key], Array("width" => 155, "height" => 125));
}
$section = CIBlockSection::GetList(array(), array("CODE" => $arResult["SECTION_CODE"]), false, array(), false);
$section = $section->GetNext();
$arResult["SECTION_PARENT_ID"] = $section["IBLOCK_SECTION_ID"];
