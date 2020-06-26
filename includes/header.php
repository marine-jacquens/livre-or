<?php
session_start(); 
$db=mysqli_connect('localhost','root','','livreor')
?>

<?php 

    if(isset($_SESSION['login'])){
        echo "
        
        <nav class='navbar'>
            <div class='logo'><a href='index.php' class='logo'>PARADISIO</a></div>
            <div class='categorie1'><a href='profil.php'>PROFIL</a></div>
            <div class='categorie1'><a href='livre-or.php'>LIVRE D'OR</a></div>
            <div class='categorie1'><a href='deconnexion.php'>DECONNEXION</a></div>
        </nav>      
            
        ";
    }else {echo "
        <nav class='navbar'>
            <div class='logo'><a href='index.php'>PARADISIO</a></div>
            <div class='categorie2'><a href='connexion.php'>CONNEXION</a></div>
            <div class='categorie2'><a href='inscription.php'>INSCRIPTION</a></div>
        </nav>   
    ";}

?>


