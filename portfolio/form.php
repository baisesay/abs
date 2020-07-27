<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];




    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $email = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "gitgub.com";
    $mail->SMTPAuth = true;
    $mail->Username = "abdulaibais@gmail.com";
    $mail->Password ='sepabs201992';
    $mail->Port = 587;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setForm($mail, $name);
    $mail->addAddress("abdulaibais@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";

    }

    else {
        $status = "failed";
        $response = "Something is wrong:<br>" .$email->ErrorInfo;
    }
    
   exit(json_encode(array ("status" => $status, "response" => $response)));

}


