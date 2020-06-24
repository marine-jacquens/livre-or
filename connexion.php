<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/all.css">
    </head>
    <body class="body-connexion">
        <header>
            <?php include("includes/header.php") ?>
        </header>
        <main class="main-connexion">
            <form action="" method="post" class="form-connexion">
                <?php 
                if(isset($_POST['submit'])){
                    $login=$_POST['login'];
                    $password=$_POST['password'];
                    
                    if($login && $password){
                        
                        $db=mysqli_connect('localhost','root','','livreor');
                        if(!$db){die("Error:".mysql_error());}
                        $requete="SELECT * FROM utilisateurs WHERE login ='$login'";
                        $execution=mysqli_query($db,$requete);
                        $recuperation=mysqli_fetch_array($execution);
               
                     
                            if(password_verify($password,$recuperation[2])){
                                $_SESSION['login']=$_POST['login'];
                                header('location:index.php');
                                
                            }else{echo'<span>Votre mot de passe ou login est incorrect</span>';}
                        
                    }else{echo '<span>Veuillez remplir tous les champs</span>';}
                }
                
                ?>
                
                <h1>CONNEXION</h1>
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="Entrez votre login"><br><br>
                <label for=password>Password</label>
                <input type="password" name="password" placeholder="Entrez votre mot de passe"><br><br>
                <input type="submit" name="submit" value="VALIDER">
            </form>
            
        </main>
        <footer>
            <?php include("includes/footer.php") ?>            
        </footer>
    </body>
</html>