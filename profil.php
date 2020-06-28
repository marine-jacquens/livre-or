<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Profil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/all.css">
    </head>
    <body class="body-profil">
        <header>
            <?php include("includes/header.php")?>
        </header>
        <main class="main-profil content">
            
            
            <form action="" method="post" class="form-profil">
                
                <?php 
                if(isset($_SESSION['login'])){
                    $db=mysqli_connect('localhost','root','','livreor');
                    $requete1="SELECT * FROM utilisateurs WHERE login = '$_SESSION[login]' ";
                    $execution1=mysqli_query($db,$requete1);
                    $recuperation1=mysqli_fetch_assoc($execution1);
               
            
                    if(isset($_POST['submit'])){
                        $login=$_POST['login'];
                        $password=$_POST['password']; 
                        $password_check=$_POST['password_check']; $hash=password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
                        $session=$_SESSION['login'];
                        
                        if($login){
                            $requete2="SELECT * FROM utilisateurs WHERE login = '$login'";
                            $execution2=mysqli_query($db,$requete2);
                            $recuperation2=mysqli_num_rows($execution2);

                            if($recuperation2 >= 1){ 
                                
                                echo '<span>Ce login existe déjà !</span>';
                            }
                            else {
                                $requete3="UPDATE utilisateurs SET login = '$login' WHERE login = '$session'"; 
                                $execution3=mysqli_query($db,$requete3);

                                header('location:deconnexion');  
                                }
                            }

                        if($password && $password_check){
                            if($password == $password_check){
                                $requete4="UPDATE utilisateurs SET password = '$hash' WHERE login = '$session'";
                                $execution4=mysqli_query($db,$requete4);

                                header('location:deconnexion');  

                            }else{echo'<span>Vos mots de passe doivent être identiques</span>';}
                        }else{echo'<span>Remplissez le(s) champs login et/ou mot de passe et confirmation mot de passe </span>';}

                    }
                    
                }else{header('location:connexion.php');}
                ?>
                
                <h1>PROFIL</h1>
                <label for="login">Login</label><br>
                <input type="text" name="login" value="<?php echo $recuperation1['login'] ?>"><br>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" placeholder="Entrez votre nouveau mot de passe"><br>
                <label for="password_check">Confirmation mot de passe</label><br>
                <input type="password" name="password_check" placeholder="Confirmez votre mot de passe"><br>
                <input type="submit" name="submit" value="VALIDER">
            </form>
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>