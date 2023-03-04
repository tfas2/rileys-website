<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $package = $_POST['package'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];


    $email_from = 'rileys pleasure arena';

    $email_subject = "new form submisson"

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Package: $package.\n".
                    "User Subject: $subject.\n".
                    "User Country: $country.\n";


    $to = "fhelp925@gmail.com";

    $headers = "From" $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    maiil($to,$email_subject,$email_body,$heafers);

    header("location: contact.html");
