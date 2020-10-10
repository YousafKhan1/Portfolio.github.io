<?php
    //if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $fp = fopen("file.txt", "w");
        fwrite($fp, $email);
fclose($fp);
echo "<h1>Yes done</h1>";
//         $to = "muhammadyousaft1@gmail.com";
//         $subject = "HI";
//         $header = "From: " .$email;

//         if(mail($to, $subject, $message, $header)) {
//             echo "Thanks For Submission to email";
//             header("location:../index.html");
//         }
//         else {
//             echo "Failed to submit";
//             header("location:../index.html");
//         }
    //}
?>
