<?php

if ($_POST['phone']) {
    $phone = $_POST['phone'];

    require_once "SendMailSmtpClass.php";
    $mailSMTP = new SendMailSmtpClass('info@bulat2005.ru', '3a%%6kHR', 'ssl://smtp.beget.ru', 465, "UTF-8");

    $from = array(
        "bulat2005.ru",
        "info@bulat2005.ru"
    );

    $to = 'info@bulat2005.ru';
    // $to = 'Bulat2005ip@mail.ru';
    //$to = 'pro@ww.net.ru';

    $subject = 'Запрос с сайта bulat2005.ru';
    $message = 'Запрос с сайта bulat2005.ru<br><br>
                <b>Телефон</b> - '.$phone.'<br><br>';

    $result =  $mailSMTP->send($to, $subject, $message, $from);

    if($result === true){
        echo "Done";
    }else{
        echo "Error: " . $result;
    };
};

if ($_POST['text3']) {
    $name = $_POST['name3'];
    $phone = $_POST['phone3'];
    $text = $_POST['text3'];

    require_once "SendMailSmtpClass.php";
    $mailSMTP = new SendMailSmtpClass('info@bulat2005.ru', '3a%%6kHR', 'ssl://smtp.beget.ru', 465, "UTF-8");

    $from = array(
        "bulat2005.ru",
        "info@bulat2005.ru"
    );

    $to = 'info@bulat2005.ru';
    // $to = 'Bulat2005ip@mail.ru';
    //$to = 'pro@ww.net.ru';

    $subject = 'Запрос с сайта bulat2005.ru';
    $message = 'Запрос с сайта bulat2005.ru<br><br>
                <b>Имя</b> - '.$name.'<br><br>
                <b>Телефон</b> - '.$phone.'<br><br>
                <b>Сообщение</b> - '.$text.'<br><br>';

    $result =  $mailSMTP->send($to, $subject, $message, $from);

    if($result === true){
        echo "Done";
    }else{
        echo "Error: " . $result;
    };
};