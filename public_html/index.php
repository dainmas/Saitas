<?php
require '../bootloader.php';

var_dump($_SESSION);
if (isset($_SESSION['cookie_email'])) {
    $h1_text = 'Labas, ' . $_SESSION['cookie_user_name'];
} else {
    $h1_text = 'Jūs neprisijungęs.';
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login form</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="js/app.js">

        <link href="https://fonts.googleapis.com/css?family=Sumana&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Charm&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="topnav">
            <div class="logo-container">
                <div class="logo"></div>
            </div>
            <a class="active" href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <div class="login-container">
                <form action="/action_page.php">
                    <a href="#fill_the_form">Not registered?</a>
                    <!--            <body class="registracion-bg">-->
                    <?php require 'navigation.php'; ?>
                    <button type="submit">Login</button>
                </form>

            </div>
        </div>
        <div class="formos-fonas">
            <div><?php require 'templates/form.tpl.php'; ?></div>>
        </div>
    </body>
</html>