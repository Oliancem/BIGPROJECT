<?php session_start(); ?>
<!DOCTYPE html>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laisser un message</title>
    <link rel="stylesheet" href="../css/contact_form.css?v=1">
    <link rel="shortcut icon" href="../images/ABD.svg" type="image/x-icon">
    <script defer src="../js/contact_form.js?v=5"> </script>
</head>
<header>
    <div class="netflixLogo">
        <a id="logo" href="main.php">
            <img src="../images/oliancem_logo.png" alt="Logo Image" />
        </a>
    </div>
    <nav class="main-nav">
        <a href="CV.php">CV</a>
        <a href="game.php">Games</a>
        <a href="contact_form.php">Laisser un message</a>
    </nav>
</header>

<div class="contact-container">
    <div class="left-col">
    </div>
    <div class="right-col">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
            <div class="description">Dark Mode</div>
        </div>

        <h1>Laisser un message</h1>

        <form action="../php/database.php" id="contact-form" method="post">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Votre Nom / Prénom" required>
            <label for="email">Adresse mail</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse mail" required>
            <label for="message">Message</label>
            <textarea rows="6" maxlength="64" placeholder="Votre message" id="message" name="message" required></textarea>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <button type="submit" id="submit" name="submit">Envoyer</button>
        </form>
        <div id="error"></div>
        <div id="success-msg"></div>

        <div class="guestbook">
            <div class="messages guestbook-messages" id="guestbook-messages">
            </div>
        </div>
    </div>
</div>

