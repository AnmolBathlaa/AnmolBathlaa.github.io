<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = 'client Name:'. $name. ' Message:- '. $_POST["message"];
    $to = "anmolbathla724@gmail.com";
    $subject = "New Inquery Form Website";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    header("Location: " . $_POST['final']);
    
    // echo $message;
?>