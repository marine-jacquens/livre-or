<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Commentaire</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/all.css">
    </head>
    <body class="body-livreor">
        <header>
            <?php include("includes/header.php")?>
        </header>
        <main class="content main-livreor">
            <?php 
                if(isset($_SESSION['login'])){              
                    $db=mysqli_connect('localhost','root','','livreor');
                    $requete="SELECT date,commentaire,login FROM commentaires, utilisateurs WHERE  commentaires.id_utilisateur = utilisateurs.id ORDER BY date DESC";
                    $execution=mysqli_query($db,$requete);
                    $recuperation=mysqli_fetch_all($execution);
                }else{header('location:connexion.php');}
            ?>
            
            <section class="commentaire">
                <table>
                    <thead>
                        <tr>
                            <th class="date">Date&Heure : Post</th>      
                            <th class="message">Vos témoignages</th>               
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($recuperation as $commentaire){?>
                        <tr>
                            <td class="date"><?php echo $commentaire[0] ?></td>
                            <td class="message"><?php echo '<p class="main-message">"'.$commentaire[1].' "</p><p class="signature"> Par : '.$commentaire[2].'</p>' ?></td>
                        </tr><?php } ?>
                    </tbody>
                </table>
            </section>          

        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>


