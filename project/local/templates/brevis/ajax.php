<?
define('STOP_STATISTICS', true);
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$GLOBALS['APPLICATION']->RestartBuffer();
?>
<?
    $result = 'success';

    $name = $_POST["name"] ? $_POST["name"] : '';
    $phone = $_POST["phone"] ? $_POST["phone"] : '';
    $time = $_POST["time"] ? $_POST["time"] : '';
    $checkbox = $_POST["checkbox"] ? $_POST["checkbox"] : '';
    $test = $_POST["test"] ? $_POST["test"] : '';

    if($name === ''){
        $result = 'Ошибка! Не заполнено обязательное поле "Ваше имя"!';
    }
    if($phone === ''){
        $result = 'Ошибка! Не заполнено обязательное поле "Ваш телефон"!';
    }
    if($checkbox === ''){
        $result = 'Ошибка! Пометьте галочкой согласие на обработку персональных данных!';
    }
    if($test !== ''){
        echo "success";
        die;
    }

    if($result == "success"){
        require_once ($_SERVER['DOCUMENT_ROOT'].'/include/phpmailer/PHPMailerAutoload.php');

        $output = "Имя пользователя: " . $name . "\n";
        $output .= "Телефон: " . $phone . "\n";
        $output .= "Удобное время для звонка: " . "\n" . $time . "\n";

        // создаём экземпляр класса PHPMailer
        $mail = new PHPMailer;

        $mail->CharSet = 'UTF-8';
        $rsSites = CSite::GetByID(SITE_ID);
        $arSite = $rsSites->Fetch();
        $mail->From      = $arSite['EMAIL'];
        $mail->FromName  = 'test';
        $mail->Subject   = 'Сообщение с формы обратной связи';
        $mail->Body      = $output;

        // $admin = CUser::GetByID(1);
        // $admin = $admin->Fetch();
        $strEmail = COption::GetOptionString('main','all_bcc');
        $arEmail = explode(',', $strEmail);
        foreach ($arEmail as $email) {
          $mail->AddAddress($email);
        }

        // отправляем письмо
        if ($mail->Send()) {
            echo "success";
        } else {
            echo "Произошла неизвестная ошибка! Попробуйте позже!";
        }
    }


?>
