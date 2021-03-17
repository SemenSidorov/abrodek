<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <?$APPLICATION->ShowHead();?>

    <title><?$APPLICATION->ShowTitle()?></title>

    <!-- Styles -->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/normalize.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.fancybox.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css", true);?>

    <!-- Scripts -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-3.2.1.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-ui.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');?>
</head>
<body>
<?$APPLICATION->ShowPanel()?>

<header class="header">
    <div class="container">
        <div class="header-block row justify-content-between">
            <div class="logo col">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/pics/logo.png" alt=""></a>
            </div>
            <div class="header-cont col">
                <span>Большепролетные конструкции<br /> из клееной древесины,<br /> Проектирование, Производство, Монтаж</span>
            </div>
            <div class="header-info col">
                <div class="location">г. Москва, ул. Московская, д. 1, оф. 1</div>
                <div class="data row">
                    <div class="time col">пн-пт с 9-18</div>
                    <div class="mail col"><a href="mailto:info@mail.ru">info@mail.ru</a></div>
                </div>
                <div class="header-phone"><a href="tel:+74950000000">+7 (495) 000-00-00</a></div>
            </div>
            <div class="header-soc col">
                <ul class="soc-list">
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/instagram.png" alt=""></a></li>
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/vk.png" alt=""></a></li>
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/facebook.png" alt=""></a></li>
                </ul>
                <div class="header-link">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">Заказать звонок</a>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
        	"bitrix:menu",
        	"new_menu",
        	Array(
        		"ALLOW_MULTI_SELECT" => "N",
        		"CHILD_MENU_TYPE" => "",
        		"COMPONENT_TEMPLATE" => "catalog_horizontal",
        		"DELAY" => "N",
        		"MAX_LEVEL" => "1",
        		"MENU_CACHE_GET_VARS" => "",
        		"MENU_CACHE_TIME" => "3600",
        		"MENU_CACHE_TYPE" => "N",
        		"MENU_CACHE_USE_GROUPS" => "Y",
        		"MENU_THEME" => "black",
        		"ROOT_MENU_TYPE" => "top",
        		"USE_EXT" => "Y"
        	)
        );?>
        <?if($APPLICATION->GetCurPage() !== '/'){
          $APPLICATION->IncludeComponent(
          	"bitrix:breadcrumb",
          	"new",
          	Array(
          		"PATH" => "",
          		"SITE_ID" => "s1",
          		"START_FROM" => "0"
          	)
          );
        }?>
    </div>
</header>
