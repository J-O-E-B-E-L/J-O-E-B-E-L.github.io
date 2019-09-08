<?php
if (isset($_POST['email']))  {

    //Email information
    $admin_email = "abelciousjoe@gmail.com";
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    //send email
    mail($admin_email, "New Form Submission", $message .' - ' . $phone, "From:" .$email);

    header('Location: http.//j-o-e-b-e-l.github.io/success.html');
    


}