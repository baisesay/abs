<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(empty($name) || empty($email) || empty($subject) || empty($message)){

    echo"<script type='text/javascript'>
    swal.fire(
        'Required!',
        'All the fields are required',
        'error'
    )
    </script>";

}

else {
    mail("abdulaibais@gmail.com", "webtech Message",$message, "From: $name <$email>");

    echo"<script type='text/javascript'>
    swal.fire(
        'Message',
        'Message sent successfully',
        'success'
    );
    window.history.log(-1);
    </script>";

}
