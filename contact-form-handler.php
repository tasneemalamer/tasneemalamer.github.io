<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $prefer= $_POST['prefer'];
    $like= $_POST['like'];
    $message= $_POST['message'];

    $email_from = 'talamer@ymail.com';
    $email_subject = 'New Person';
    $email_body = "User Name: $name.\n".
                  "User Email: $email.\n".
                    "User Prefer:  $prefer .\n".
                        "User Like:  $like.\n".
                        "User message: $message.\n";

    $to = "tasneemo222@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
        
?>