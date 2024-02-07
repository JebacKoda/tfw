<?php
 
if(isset($_POST['Odeslat'])){
    $visitor_name = $_POST['visitor_name'];
    $visitor_surname = $_POST['visitor_surname'];
    $visitor_email = $_POST['visitor_email'];
    $visitor_tel = $_POST['tel'];
    $message = $_POST['visitor_message'];

    $subject = "Zpráva od: ". $visitor_name ." ". $visitor_surname;
    $text = $message . "\r\n\r\n" . "Telefonní číslo: " . $visitor_tel . "\r\n" . "Email: " . $visitor_email;

    if(empty($visitor_name) || empty($visitor_surname) || empty($visitor_email) || empty($visitor_tel) || empty($message)){
        header('location:contact.php?error');
    }else{
        $to = "info@top-fashionweek.com";

        if(mail($to,$subject,$text)){
            header("location:contact.php?success");
        }
    }
}else{
    header("location:contact.php");
}
?>