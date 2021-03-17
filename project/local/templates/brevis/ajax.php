<?php

    $result = 'success';

    $name = $_POST["name"] ? $_POST["name"] : '';
    $phone = $_POST["phone"] ? $_POST["phone"] : '';
    $time = $_POST["time"] ? $_POST["time"] : '';
    $checkbox = $_POST["checkbox"] ? $_POST["checkbox"] : '';

    if($name === ''){
        $result = 'Ошибка! Не заполнено обязательное поле "Ваше имя"!';
    }
    if($phone === ''){
        $result = 'Ошибка! Не заполнено обязательное поле "Ваш телефон"!';
    }
    if($checkbox === ''){
        $result = 'Ошибка! Пометьте галочкой согласие на обработку персональных данных!';
    }

    if($result !== "success"){
      setcookie("errors", $result, time()+5, "/");
      header("Location: ".$_SERVER["HTTP_REFERER"]);
    }else{
        require_once ($_SERVER['DOCUMENT_ROOT'].'/include/phpmailer/PHPMailerAutoload.php');

        $output = "Имя пользователя: " . $name . "\n";
        $output .= "Телефон: " . $phone . "\n";
        $output .= "Удобное время для звонка: " . "\n" . $time . "\n";

        // создаём экземпляр класса PHPMailer
        $mail = new PHPMailer;

        $mail->CharSet = 'UTF-8';
        $mail->From      = 'info@arbodek.brevis.pro';
        $mail->FromName  = 'test';
        $mail->Subject   = 'Сообщение с формы обратной связи';
        $mail->Body      = $output;

        $mail->AddAddress( 'lol.testmail.kek@mail.ru' );

        // отправляем письмо
        if ($mail->Send()) {
            $value = "Спасибо! Наш менеджер скоро с Вами свяжется!";
            setcookie("send", $value, time()+5, "/");
            setcookie("errors", "", time());
            header("Location: ".$_SERVER["HTTP_REFERER"]);
        } else {
            $value = "<h3>Произошел как-то сбой! Попробуйте еще раз!</h3>";
            setcookie("errors", $value, time()+5, "/");
            header("Location: ".$_SERVER["HTTP_REFERER"]);
        }
    }


?>
