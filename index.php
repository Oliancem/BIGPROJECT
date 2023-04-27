<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/home.css?v=1">
    <link rel="shortcut icon" href="./images/ABD.svg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="header">
    <img src="images/oliancem_logo.png" alt="Image logo">
</div>
<div class="content">
    <h1>Who is watching ?</h1>
    <div class="image-container">
        <a href="php/loading-page.php" class="image-link" id="password-protected-link">
            <img src="images/logo_eliott.png" alt="Image Eliott">
            <p>Eliott</p>
        </a>
        <a href="php/loading-page-recruiters.php" class="image-link">
            <img src="images/recruiters.png" alt="Image visiteur">
            <p>Recruteurs</p>
        </a>
    </div>
</div>
<script src="js/home.js"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        $("#password-protected-link").on("click", function (event) {
            event.preventDefault();

            var password = prompt("Veuillez entrer le mot de passe :");

            if (password === "Eliott01@") {
                window.location.href = "php/loading-page.php";
            } else {
                alert("Mot de passe incorrect. Veuillez réessayer.");
            }
        });
    });
</script>
