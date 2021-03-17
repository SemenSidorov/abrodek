<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="title title-next">Наши <span>преимущества</span></div>
<div class="advantages row">
    <div class="advantages-slider owl-carousel col">
      <?for ($i=0; $i < count($arResult["ITEMS"])/2; $i++) {?>
        <div class="item">
            <div class="advantages-slider-block">
                <div class="advantages-slider-img">
                    <img src="<?=$arResult["ITEMS"][$i]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["ITEMS"][$i]["NAME"]?>">
                </div>
                <div class="advantages-slider-cont">
                    <span><?=$arResult["ITEMS"][$i]["NAME"]?></span>
                    <p><?=$arResult["ITEMS"][$i]["PREVIEW_TEXT"]?></p>
                </div>
            </div>
        </div>
      <?}?>
    </div>
    <div class="advantages-slider owl-carousel col">
      <?for ($i=count($arResult["ITEMS"])/2; $i < count($arResult["ITEMS"]); $i++) {?>
          <div class="item">
              <div class="advantages-slider-block">
                  <div class="advantages-slider-img">
                      <img src="<?=$arResult["ITEMS"][$i]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["ITEMS"][$i]["NAME"]?>">
                  </div>
                  <div class="advantages-slider-cont">
                      <span><?=$arResult["ITEMS"][$i]["NAME"]?></span>
                      <p><?=$arResult["ITEMS"][$i]["PREVIEW_TEXT"]?></p>
                  </div>
              </div>
          </div>
      <?}?>
    </div>
</div>
