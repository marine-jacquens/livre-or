<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/all.css">
    </head>
    <body class="body-inscription">
        <header>
            <?php include("includes/header.php")?>
        </header>
        <main class="main-inscription content">
            <form action="" method="post" class="form-inscription">
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
                            
                            $requete1="SELECT * FROM utilisateurs WHERE login = '$login' ";
                            $execution1 = mysqli_query($db,$requete1);
                            $recuperation1 = mysqli_fetch_array($execution1);
                            
                            
                            
                            if ($login !=  $recuperation1['login']){
                                $requete2="INSERT into utilisateurs (login,password) VALUES ('$login','$password_hash')";
                                $execution2=mysqli_query($db,$requete2);
                                header('location:connexion.php');
                                
                            }else {echo'<span>Ce login existe déjà</span>';}
                            
                        }else{echo '<span>Les mots de passe doivent être identiques</span>';}
                        
                    }else{echo '<span>Veuillez remplir tous les champs</span>';}
                }
      
            ?>
                <h1>INSCRIPTION</h1>
                <label for="login">Login</label><br>
                <input type="text" name="login" placeholder="Entrez votre login"><br>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" placeholder="Entrez votre mot de passe"><br>
                <label for="password">Confirmation de mot de passe</label><br>
                <input type="password" name="password_check" placeholder="Confirmez votre mot de passe"><br>
                <input type=submit name="submit" value="VALIDER">
            </form>
            
            
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>