<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "farojainurridlo21@gmail.com";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Email berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Email gagal dikirim.'); window.history.back();</script>";
    }
}
?>
