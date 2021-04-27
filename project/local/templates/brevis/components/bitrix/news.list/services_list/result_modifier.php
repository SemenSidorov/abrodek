<?
foreach ($arResult["ITEMS"] as $key => $item) {
  $arResult["ITEMS"][$key]["PROPERTIES"]["ICON"]["RESULT"] = CFile::GetFileArray($item["PROPERTIES"]["ICON"]["VALUE"]);
}
