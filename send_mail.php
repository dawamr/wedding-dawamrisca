<?php 
if(isset($_POST['submit'])){
    $to = "araf235@gmail.com"; // this is your Email address
    $from = "ucapan@dnh.my.id"; // this is the sender's Email address
    $names = $_POST['names'];
    $atttending = $_POST['atttending'];
    $subject = "Ucapan Dari" . $_POST['names'] - "Saya " . $_POST['atttending'];;
    $subject2 = "Copy of your form submission";
    $message = $names . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $names . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $names . ", we will contact you shortly.";
    header('Location: index.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>