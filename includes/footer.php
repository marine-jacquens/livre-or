<section class="footer">
    <div class="logo">
        <h1>PARADISIO</h1>
    </div>
    <div class="menu">
        <?php
                if(isset($_SESSION['login'])){
                echo"
                        <a href='index.php'>Accueil</a>
                        <a href='profil.php'>Profil</a>
                        <a href='livre-or.php'>Livre d'or</a>
                        <a href='index.php'>Deconnexion</a>
                ";
                }else{
                    echo"
                        <a href='index.php'>Accueil</a>
                        <a href='connexion.php'>Connexion</a>
                        <a href='inscription.php'>Inscription</a>
                    ";
                }
            ?>
    </div>
    <div class="RS">
        <div>
            <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram-square"></i></a>
        </div>
        <div>
            <a href="https://www.twitter.com"><i class="fab fa-twitter-square"></i></a>
            <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</section>


<?php

mysqli_close($db);

?>