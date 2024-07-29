<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {

    $where = htmlspecialchars($_POST['where']);
    $email = htmlspecialchars($_POST['email']);
    $bug = htmlspecialchars($_POST['bug']);

    $to = 'austin.bwn@hotmail.com';
    $subject = 'Bug Report From ' . $email;
    $message = "I hate Bugs \n";
    $message .= "Email: $email\n\n";
    $message .= "Bug Specific Place: \n$where\n";
    $message .= "Bug Discription \n$bug\n";

    /* Content-type header  */
    $headers = "MIME-VERSION: 1.0" . "\r\n";
    $headers .= "content-type: text/plain; charset=UTF-8" . "\r\n";

    // OMG i just realised i can use two /'s to comment stuff in on one line only, holy crap thats so cool.
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    // Makes it so that it lets you know when the email was sent or not.
    if (mail($to, $subject, $message, $headers)) {
        echo 'Your bug report has been sent successfully.';
    } else {
        echo 'There was a problem sending your bug report.';
    }
}
