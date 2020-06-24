<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Profil</title>
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
            
            <?php 
                if(isset($_SESSION['login'])){
                    $db=mysqli_connect('localhost','root','','livreor');
                    $requete1="SELECT * FROM utilisateurs WHERE login = '$_SESSION[login]' ";
                    $execution1=mysqli_query($db,$requete1);
                    $recuperation=mysqli_fetch_assoc($execution1);
                }
            
                if(isset($_POST['submit'])){
                    $login=$_POST['login'];
                    $password=$_POST['password']; 
                    $password_check=$_POST['password_check']; $hash=password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
                    
                    if($login && $password && $password_check){
                        if($password == $password_check){
                            $requete2="UPDATE utilisateurs SET login = '$login', password = '$hash' WHERE login = '$_SESSION[login]'";
                            $execution2=mysqli_query($db,$requete2);
                            
                            header('location:deconnexion');
                            
                        }else{echo'Vos mots de passe doivent être identiques';}
                        
                    }else{echo'Veuillez remplir tous les champs';}
                    
                    
                }
            ?>
            <form action="" method="post">
                <label for="login">Login</label><br>
                <input type="text" name="login" value="<?php echo $recuperation['login'] ?>"><br>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password"><br>
                <label for="password_check">Confirmation mot de passe</label><br>
                <input type="password" name="password_check"><br>
                <input type="submit" name="submit" value="VALIDER">
            </form>
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>