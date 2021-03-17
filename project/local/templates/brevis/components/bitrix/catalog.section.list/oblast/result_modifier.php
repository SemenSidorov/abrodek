<?
foreach ($arResult["SECTIONS"] as $key => $item) {
  $arResult["SECTIONS"][$key]["DETAIL_PICTURE"] = CFile::GetFileArray($item["DETAIL_PICTURE"]);
}
