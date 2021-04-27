<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Интернет-маркетинговое агентство BREVIS | www.brevis-site.ru" />
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
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/slick.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/slick-theme.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/swiper-bundle.min.css", true);?>

    <!-- Scripts -->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-3.2.1.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-ui.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/swiper-bundle.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.maskedinput.min.js');?>


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
				<div class="location">г. Москва, ул. 2-я Институтская, д.6, с.1, оф. 501</div>
                <div class="data row">
					<div class="time col">Пн-Пт: с 10 до 18</div>
                    <div class="mail col"><a href="mailto:info@arbodek.ru">info@arbodek.ru</a></div>
                </div>
                <div class="header-phone"><a href="tel:+74951774567">+7 (495) 177-45-67</a></div>
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
				<?$curPage = $APPLICATION->GetCurPage();?>
        <?if($curPage !== '/'){
					$APPLICATION->IncludeComponent(
          	"bitrix:breadcrumb",
          	"new",
          	Array(
          		"PATH" => "",
          		"SITE_ID" => "s1",
          		"START_FROM" => "0"
          	)
          );
					if(strpos($curPage, '/oblasti-primeneniya/') === false && strpos($curPage, '/nashi-uslugi/') === false && strpos($curPage, '/realizovannye-proekty/') === false && strpos($curPage, '/news/') === false && strpos($curPage, '/contacts/') === false){
						?>
							<h1><?=$APPLICATION->ShowTitle(false)?></h1>
						<?
					}
				}?>
    </div>
</header>