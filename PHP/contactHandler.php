<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "muhammadyousafmasror@gmail.com";
        $subject = "HI";
        $header = "From: " .$email;

        if(mail($to, $subject, $message, $header)) {
            echo "Thanks For Submission";
        }
        else {
            echo "Thanks for submission";
        }
    }
?>