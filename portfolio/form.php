<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

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
