<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><div class="grid">
    <a data-fancybox="inline" data-src="#hidden-content-a" href="javascript:;" class="btn" onclick="$('.slider-class').slick()">Новость первая</a>
    <div style="display: none;" id="hidden-content-a" class="hidden_fancybox">
        <div class="slider_fancy">
            <!-- Слайдер -->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a data-fancybox="gallery1" href="https://swiperjs.com/demos/images/nature-1.jpg"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery2" href="https://swiperjs.com/demos/images/nature-2.jpg"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery3" href="https://swiperjs.com/demos/images/nature-3.jpg"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery4" href="https://swiperjs.com/demos/images/nature-4.jpg"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery5" href="https://swiperjs.com/demos/images/nature-5.jpg"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery6" href="https://swiperjs.com/demos/images/nature-6.jpg"><img src="https://swiperjs.com/demos/images/nature-6.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery7" href="https://swiperjs.com/demos/images/nature-7.jpg"><img src="https://swiperjs.com/demos/images/nature-7.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery8" href="https://swiperjs.com/demos/images/nature-8.jpg"><img src="https://swiperjs.com/demos/images/nature-8.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery9" href="https://swiperjs.com/demos/images/nature-8.jpg"><img src="https://swiperjs.com/demos/images/nature-8.jpg" /></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery10" href="https://swiperjs.com/demos/images/nature-10.jpg"><img src="https://swiperjs.com/demos/images/nature-10.jpg" /></a></div>
                </div>
                <!-- Добавление стрелок -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <!-- Миниатюры для слайдера -->
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-2.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-3.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-4.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-5.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-6.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-7.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-8.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-8.jpg);"></div>
                    <div class="swiper-slide" style="background-image: url(https://swiperjs.com/demos/images/nature-10.jpg);"></div>
                </div>
                <!-- Добавление стрелок -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
        <div class="text_after_slider_fancy">
            <p>
                <b>Заголовок</b><br />
                Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен
                ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты. Когда от милой моей долины поднимается пар и полдневное солнце стоит
                над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых, а я лежу в высокой траве у быстрого ручья и, прильнув к земле, вижу тысячи всевозможных былинок и чувствую, как близок моему сердцу
                крошечный мирок, что снует между стебельками, наблюдаю эти неисчислимые, непостижимые разновидности червяков и мошек и чувствую близость всемогущего, создавшего нас по своему подобию, веяние вселюбящего, судившего нам парить
                в вечном блаженстве, когда взор мой туманится и все вокруг меня и небо надо мной запечатлены в моей душе, точно образ возлюбленной, - тогда,
            </p>
        </div>
    </div>
    <a data-fancybox="inline" data-src="#hidden-content-a-2" href="javascript:;" class="btn">Новость вторая</a>
    <div style="display: none;" id="hidden-content-a-2">
        <h2>Hello!</h2>
        <p>This is animated content! Cool, right?</p>
        <div class="slider_fancy_2">
            <!-- Слайдер -->
            <div class="swiper-container_2 gallery-top_2">
                <div class="swiper-wrapper_2">
                    <div class="swiper-slide_2"><a data-fancybox="gallery1" href="https://swiperjs.com/demos/images/nature-1.jpg"><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery2" href="https://swiperjs.com/demos/images/nature-2.jpg"><img src="https://swiperjs.com/demos/images/nature-2.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery3" href="https://swiperjs.com/demos/images/nature-3.jpg"><img src="https://swiperjs.com/demos/images/nature-3.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery4" href="https://swiperjs.com/demos/images/nature-4.jpg"><img src="https://swiperjs.com/demos/images/nature-4.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery5" href="https://swiperjs.com/demos/images/nature-5.jpg"><img src="https://swiperjs.com/demos/images/nature-5.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery6" href="https://swiperjs.com/demos/images/nature-6.jpg"><img src="https://swiperjs.com/demos/images/nature-6.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery7" href="https://swiperjs.com/demos/images/nature-7.jpg"><img src="https://swiperjs.com/demos/images/nature-7.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery8" href="https://swiperjs.com/demos/images/nature-8.jpg"><img src="https://swiperjs.com/demos/images/nature-8.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery9" href="https://swiperjs.com/demos/images/nature-8.jpg"><img src="https://swiperjs.com/demos/images/nature-8.jpg" /></a></div>
                    <div class="swiper-slide_2"><a data-fancybox="gallery10" href="https://swiperjs.com/demos/images/nature-10.jpg"><img src="https://swiperjs.com/demos/images/nature-10.jpg" /></a></div>
                </div>
                <!-- Добавление стрелок -->
                <div class="swiper-button-next_2 swiper-button-white_2"></div>
                <div class="swiper-button-prev_2 swiper-button-white_2"></div>
            </div>
            <!-- Миниатюры для слайдера -->
            <div class="swiper-container_2 gallery-thumbs_2">
                <div class="swiper-wrapper_2">
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-2.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-3.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-4.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-5.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-6.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-7.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-8.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-8.jpg);"></div>
                    <div class="swiper-slide_2" style="background-image: url(https://swiperjs.com/demos/images/nature-10.jpg);"></div>
                </div>
                <!-- Добавление стрелок -->
                <div class="swiper-button-next_2 swiper-button-white_2"></div>
                <div class="swiper-button-prev_2 swiper-button-white_2"></div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
