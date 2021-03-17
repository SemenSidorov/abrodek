<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="slide_3">
    <div class="container">
        <div class="title">Виды несущих конструкций<br /> <span>из клееной древесины</span></div>
        <ul class="kinds-tabs nav nav-tabs" id="myTab" role="tablist">
          <?$bool = true;?>
          <?foreach ($arResult["SECTIONS"] as $main_sect) {?>
            <li class="nav-item" role="presentation">
                <a class="nav-link <?=$bool ? 'active' : ''?>" id="tab<?=$main_sect["ID"]?>" data-toggle="tab" href="#<?=$main_sect["CODE"]?>" role="tab" aria-controls="<?=$main_sect["CODE"]?>" aria-selected="<?=$bool?>"><?=$main_sect["NAME"]?></a>
            </li>
            <?$bool = false;?>
          <?}?>
        </ul>
        <div class="kinds-tabs-content tab-content" id="myTabContent">
          <?$bool = true;?>
          <?foreach ($arResult["SECTIONS"] as $main_sect) {?>
            <div class="tab-pane fade <?=$bool ? 'show active' : ''?>" id="<?=$main_sect["CODE"]?>" role="tabpanel" aria-labelledby="tab<?=$main_sect["ID"]?>">
                <div class="row row-cols-1 row-cols-md-2">
                  <?foreach ($main_sect["CHILD"] as $sect) {?>
                    <div class="col mb-4">
                        <div class="card">
                          <a href="<?=$sect["DETAIL_PAGE_URL"]?>" style="text-decoration: none;">
                            <div class="card-img">
                                <img src="<?=$sect["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$sect["DETAIL_PICTURE"]["ALT"]?>">
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?=$sect["NAME"]?></p>
                            </div>
                          </a>
                        </div>
                    </div>
                  <?}?>
                </div>
            </div>
            <?$bool = false;?>
          <?}?>
        </div>
    </div>
</section>
