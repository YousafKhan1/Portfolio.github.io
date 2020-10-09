<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "muhammadyousaft1@gmail.com";
        $subject = "HI";
        $header = "From: " .$email;

        if(mail($to, $subject, $message, $header)) {
            echo "Thanks For Submission";
            header("location:../index.html");
        }
        else {
            echo "Failed to submit";
        }
    }
?>
