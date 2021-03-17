<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Error;

if (!\Bitrix\Main\Loader::includeModule('iblock')) {
    ShowError(Loc::getMessage('IBLOCK_MODULE_NOT_INSTALLED'));
    return;
}
Loc::loadMessages(__FILE__);


class NewsSectionsList extends CBitrixComponent
{
    /**
     * @param $arOrder
     * @param $arFilter
     * @return array
     */
    private function getList($iblock_id, $count_sections=false, $count_elements=false)
    {
        $arFilter = array("IBLOCK_ID" => , $iblock_id);
        $arOrder = array("ID" => "ASC");
        if($count_sections){
          $arNavStartParams = array("nTopCount" => $count_sections);
        }else{
          $arNavStartParams = false;
        }
        $sections = CIBlockSection::GetList($arOrder, $arFilter, false, array(), $arNavStartParams);
        while($arSect = $sections->GetList()){
          
        }
		    $folders = CIBlockElement::GetList(array(), array('SECTION_ID' => $arFilter['SECTION_ID'], 'ID' => $arFilter['PROPERTY_FOLDERS']), false, false, array());

    }

    private function status404()
    {
        Bitrix\Iblock\Component\Tools::process404(
            '',
            true,
            true,
            true,
            false
        );
        die();
    }

    public function executeComponent()
    {
        global $APPLICATION;
        $this->arResult = $this->getList($this->arParams["IBLOCK_ID"]);

        $this->includeComponentTemplate();
    }
}
