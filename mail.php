<?php 
if(isset($_POST['submit'])){
    $to = "casspangell@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];

    $subject = "BlessingsForHomes.com Message";
    $subject2 = "Thank You for Contacting Us!";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for contacting Blessings for Homes! Terry will be in contact with you." . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>