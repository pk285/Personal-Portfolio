<?php 
    // Information that will be sent from our contact form via email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "frozen110@gmail.com";
    $subject = "Request";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='index.php' style='text-decoration:none;color:blue;'> Return Home</a>";
?>