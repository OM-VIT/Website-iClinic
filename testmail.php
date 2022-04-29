<?php
$receiver="omkar.gore19@vit.edu";
$subject="Email test";
$body="jhgw";
$sender="From:omkargoreofficial2000@gmail.com";

//php function to send mail
if (mail($receiver,$subject,$body,$sender)){
    echo "Email Sent successfully to $receiver";
    }
    else{
        echo " Sorry Failed to send mail";
    }

    ?>  