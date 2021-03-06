<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ikona stránky -->
    <link rel="icon" type="image/png" sizes="32x32" href="Icon/favicon.ico">
    <!-- Nahrání vlastního css -->
    <link rel="stylesheet" href="main.css">
    <!-- Nahrání bootstrapu -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Nahrání jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
            $("#navbar").load("navbar.html");
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tomáš Kotous">
    <title>Přihlásit</title>
    <!-- Přepsání původního nastavení bootstrapu -->
    <style>
        /* Odstranění zděděné mezery pod hlavou stránky */
        .jumbotron {
            margin-bottom: 0px;
        }
        /* Odstranění zděděné zakulacení menu. */
        .navbar {
            margin-bottom: 0px;
            border-radius: 0;
        }
    </style>

</head>
<!-- Začátek stránky -->
<body id="page">

<!-- Hlavička stránky -->
<div id="header"></div>

<!-- Menu stránky -->
<nav id="navbar"></nav>

<!-- Obsah stránky -->
<div class="container form" id="content">
    <form target="_self">
        <fieldset>
            <legend> <h3> Přihlášení: </h3></legend>
            Uživatelské jméno:
            <div class="input-icon">
                <i class="glyphicon glyphicon-user icon"></i>
                <input type="text" name="username" required>
            </div>
            Heslo:
            <div class="input-icon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" name="password" required>
            </div>
            <div class="input-container">
                <input type="submit" id="button" name="login" value="Přihlásit">
            </div>

        </fieldset>
    </form>
</div>

<!-- Zápatí stránky -->
<div id="footer"> </div>
</body>
</html>