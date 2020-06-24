
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=yes">
        <link rel="stylesheet" href="fontawesome/all.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <?php include("includes/header.php");?>
        </header>
        <main>
            <?php
            if(isset($_SESSION['login'])){
            echo '<h2> Bienvenue '.$_SESSION['login'].'</h2>';
            include ("commentaire.php");
                  }?>
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>


