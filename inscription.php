<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/all.css">
    </head>
    <body>
        <header>
            <?php include("includes/header.php")?>
        </header>
        <main>
            <form action="" method="post">
                <label for="login">Login</label><br>
                <input type="text" name="login" placeholder="Entrez votre login"><br>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password"><br>
                <label for="password">Confirmation de mot de passe</label><br>
                <input type="password" name="password_check"><br>
                <input type=submit name="submit" value="VALIDER">
            </form>
            
            <?php 
                if(isset($_POST['submit'])){
                    $login=$_POST['login'];
                    $password=$_POST['password'];
                    $password_check=$_POST['password_check'];
                    $password_hash = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
                    
                    if($login && $password && $password_check){
                        
                        if($password == $password_check){
                            
                            $db=mysqli_connect('localhost','root','','livreor');
                            if(!$db){die('Error:'.mysql_error());}
                            $requete="INSERT into utilisateurs (login,password) VALUES ('$login','$password_hash')";
                            $execution=mysqli_query($db,$requete);
                            
                            header('location:connexion.php');
                        }else{echo 'Les mots de passe doivent être identiques';}
                        
                    }else{echo 'Veuillez remplir tous les champs';}
                }
            
            ?>
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>