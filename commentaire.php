<form action="" method="post">
    <label for="commentaire">Laissez un commentaire</label><br>
    <textarea type="textarea" placeholder="Ecrivez ce que vous voulez" name="commentaire">
    </textarea><br><br>
    <input type="submit" name="submit" value="VALIDER">
</form>

<?php 

if(isset($_SESSION['login'])){
    $db=mysqli_connect('localhost','root','','livreor');
    if(!$db){die("Error:".mysql_error());}
    $requete1="SELECT id FROM utilisateurs WHERE login = '$_SESSION[login]'";
    $execution1=mysqli_query($db,$requete1);
    $id=mysqli_fetch_all($execution1);
    
    
    if(isset($_POST['submit'])){
    $commentaire1 = $_POST['commentaire'];
    $commentaire2 = addslashes($commentaire1);
    
        if($commentaire1){
        $requete2="INSERT INTO commentaires (commentaire,id_utilisateur,date) VALUES ('$commentaire2',".$id[0][0].",NOW())";
        $execution2=mysqli_query($db,$requete2);
            
        echo 'Votre message a bien été envoyé';
        }else{echo "Veuillez remplir le champs";}
    }

}




?>