<?php

 if(isset($_POST['submit']))
{  
    $to = "support@wwmc.info"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

?>
