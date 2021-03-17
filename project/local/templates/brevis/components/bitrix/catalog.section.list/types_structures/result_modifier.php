<?
foreach ($arResult["SECTIONS"] as $key => $sect) {
  $items = CIBlockElement::GetList(array("SORT"=>"ASC"), array("IBLOCK_SECTION_ID" => $sect["ID"]), false, array("nTopCount" => 4), array());
  while($item = $items->GetNext()){
    $item["DETAIL_PICTURE"] = CFile::GetFileArray($item["DETAIL_PICTURE"]);
    $arResult["SECTIONS"][$key]["CHILD"][] = $item;
  }
}
