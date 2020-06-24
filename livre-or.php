<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Commentaire</title>
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
                    $requete1="SELECT date FROM commentaires ORDER by date DESC";
                    $execution1=mysqli_query($db,$requete1);
                    $date=mysqli_fetch_all($execution1);
                    
                    $requete2="SELECT commentaire FROM commentaires ORDER by date DESC";
                    $execution2=mysqli_query($db,$requete2);
                    $commentaire=mysqli_fetch_all($execution2);
                    
                    $requete3="SELECT login FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC";
                    $execution3=mysqli_query($db,$requete3);
                    $login = mysqli_fetch_all($execution3);
                }
            ?>
            
            <section class="commentaire">
                <div>
                     <?php
                    foreach($date as $key => $value){
                        foreach ($value as $key2=>$value2){ 
                        echo "Posté le " .$value2. '</p><br/><br/>';
                        }
                    }
                    ?> 
                </div>
                <div>
                     <?php
                    foreach($login as $key => $value){
                        foreach ($value as $key2=>$value2){ 
                        echo "Par " .$value2. '</p><br/><br/>';
                        }
                    }
                    ?> 
                </div>
                <div>
                     <?php
                    foreach($commentaire as $key => $value){
                        foreach ($value as $key2=>$value2){ 
                        echo $value2. '</p><br/><br/>';
                        }
                    }
                    ?> 
                </div>
                
            </section>
            
            
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>
