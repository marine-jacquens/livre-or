
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, user-scalable=yes">
        <link rel="stylesheet" href="fontawesome/all.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="body-index">
        <header>
            <?php include("includes/header.php");?>

            
        </header>
        <main class="content main-index">
            <section class="section-presentation">
                 <div class='paragraphe'>
                     
                    <h1>Bienvenue sur Paradisio</h1>
                    <h2>Le blog des destinations de rêve</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                    </p>

                </div>
            </section>
            <section class="section-articles">
                <h1>Découvrez nos recommendations </h1>
                <article class="articles">
                    
                    <article class="article">
                        <h2>
Thaïlande -  Patong Hôtel </h2>
                        <div>
                            <img src="css/images/hotel.jpg" alt="hotel">
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                            </p>
                        </div>
                    </article>
                    <article class="article">
                         <h2>
Thaïlande -  Chrambre Patong Hotel</h2>
                        <div>
                            <img src="css/images/chambre.jpg" alt="hotel">
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                            </p>
                        </div>
                    </article>
                </article>
                <article class="articles">
                    <article class="article">
                         <h2>
Thaïlande -  Patong Beach</h2>
                        <div>
                            <img src="css/images/plage.jpg" alt="plage">
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                            </p>
                        </div>
                    </article>
                    <article class="article">
                         <h2>
Thaïlande -  Patong idées sorties</h2>
                        <div>
                            <img src="css/images/activite.jpg" alt="sortie Patong">
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                            </p>
                        </div>
                    </article>
                </article>
            </section>
            
            <section class='section-commentaire'>
                <?php
                if(isset($_SESSION['login'])){
                echo "<div class='commentaire-form'><h2>Bonjour ".$_SESSION['login']."</h2>";
                include ("commentaire.php");
                echo "</div><div class='commentaire-paragraphe'>
                <h1>Partagez vos souvenirs dans notre livre d'or</h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.<br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat.Morbi vitae turpis quis ex rhoncus commodo id fermentum ante.
                </p></<div>";
                }else{echo"
                <div class='titre'> 
                    <h1>Partagez vos souvenirs de vacances dans notre livre d'or. <br><br>Inscrivez-vous ou connectez vous </h1>
                </div>
                <div class='paragraphe'>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                </p>
                <br>
                <button><a href='inscription.php'>Inscription</a></button>
                
                </div>
                
                <div class='paragraphe'>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed faucibus lorem. In dapibus, dui quis ultrices viverra, dui eros rhoncus massa, quis dictum ante sapien ut nunc. Etiam sed felis id quam blandit tincidunt vitae sed sem. Integer sit amet tristique leo. Aliquam dapibus bibendum aliquam. Sed suscipit rhoncus leo luctus consequat. Morbi vitae turpis quis ex rhoncus commodo id fermentum ante. Aenean sollicitudin congue velit, sed dignissim lorem porta aliquam. Nunc pretium odio magna, vitae aliquet neque volutpat nec.
                </p>
                <br>
                 <button><a href='connexion'>Connexion</a></button>
                </div>
                ";}
                
                ?>
           
                
            </section>
            
                
            
           
        </main>
        <footer>
            <?php include("includes/footer.php")?>
        </footer>
    </body>
</html>


