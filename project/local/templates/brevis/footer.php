
<footer>
    <div class="container">
        <div class="footer-cont row">
            <div class="footer-logo col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/logo.png" alt=""></a></div>
            <div class="footer-soc col">
                <ul class="soc-list">
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/instagram.png" alt=""></a></li>
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/vk.png" alt=""></a></li>
                    <li><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/pics/facebook.png" alt=""></a></li>
                </ul>
            </div>
            <div class="brevis col">
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/brevis.png" alt="">
                <p>Разработка корпоративного сайта <a href="#">интернет-агентство BREVIS</a></p>
            </div>
        </div>
        <div class="footer-menu row justify-content-between">
            <ul>
                <li><a href="#">О корпорации</a></li>
                <li><a href="#">Новости корпорации</a></li>
                <li><a href="#">Публикации в СМИ</a></li>
                <li><a href="#">Награды и достижения</a></li>
                <li><a href="#">Вопросы и ответы</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <ul>
                <li><a href="#">Проекты</a></li>
                <li><a href="#">Материалы</a></li>
                <li><a href="#">Производство</a></li>
                <li><a href="#">Строительство</a></li>
                <li><a href="#">Галерея</a></li>
            </ul>
            <ul>
                <li><a href="#">БКДК</a></li>
                <li><a href="#">Клееный брус</a></li>
                <li><a href="#">Столярные изделия</a></li>
            </ul>
            <ul>
                <li><a href="#">Дилеры</a></li>
                <li><a href="#">Партнеры</a></li>
                <li><a href="#">Поставщикам</a></li>
            </ul>
            <ul>
                <li><a href="#">Дома из клееного бруса</a></li>
                <li><a href="#">Панельно-каркасные дома</a></li>
                <li><a href="#">Бани, беседки, навесы</a></li>
            </ul>
        </div>
    </div>
    <div class="copy">© Copyright АРБОДЭК, 2020</div>
</footer>
<div id="top"></div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="message"><?=$_COOKIE["send"] ? $_COOKIE["send"] : ''?></div>
                <div class="errors" style="color: red;"><?=$_COOKIE["errors"] ? $_COOKIE["errors"] : ''?></div>
                <form action="<?=SITE_TEMPLATE_PATH?>/ajax.php" method="post">
                    <input required type="text" name="name" placeholder="Ваше имя">
                    <input required type="text" name="phone" placeholder="Ваш телефон">
                    <input type="text" name="time" placeholder="Удобное время для звонка">
                    <input type="submit" value="Отправить">
                    <label>
                        <input required name="checkbox" type="checkbox">
                        <span>Отправкой данной формы я подтверждаю своё согласие на обработку моих данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
