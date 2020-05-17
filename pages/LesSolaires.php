<!doctype html>
<html lang="fr">
  <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152515197-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-152515197-1');
	</script>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="En été, comme en hiver à la neige, se protéger la peau des effets néfastes du soleil est indispensable. Les Solaires FOREVER sont fait pour répondre à tous vos besoins">
    <meta name="author" content="Aloeprevention">    
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="canonical" href="https://www.aloeprevention.fr/pages/LesSolaires.php">
    
    <!-- Open Graph meta pour Facebook -->
    <meta property="og:title" content="Les solaires - Aloeprevention" />
    <meta property="og:url" content="https://www.aloeprevention.fr/pages/LesSolaires.php" />
    <meta property="og:image" content="https://www.aloeprevention.fr/images/Logo/Aloeprevention.png" />
    <meta property="og:description" content="En été, comme en hiver à la neige, se protéger la peau des effets néfastes du soleil est indispensable. Les Solaires FOREVER sont fait pour répondre à tous vos besoins" />
    <meta property="og:site_name" content="Aloeprevention" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Les solaires- Aloeprevention</title>
  </head>
  
    <?php include ("navbarpages/navbar.php"); ?>

    <!-- Début du body -->
  <body>
    <br><br>
    <p id="titre" style="text-align:center;">Les solaires</p><br><br> 

     <div class="container-fluid">
      <div class="row mx-auto">

<!-- PHP-PDO Connexion à la base de donnée aloeprevention, requête selection de * de categories -->
<?php

$dsn='mysql:host=localhost;dbname=aloeprevpiavfmlp;charset=utf8';
$user='root';  
$pass='';

try{
    $connexion = new PDO($dsn, $user, $pass);
    $resultat = $connexion->query("SELECT * FROM produits WHERE id_categorie LIKE 8");
    $resultat->setFetchMode(PDO::FETCH_ASSOC);
    }

catch(Exception $e){
    echo 'Une erreur est survenue !';
    Die();
    }

foreach($resultat as $ligne){       

?>

      <!-- Suite du body -->
       <div class="col-sm-3 mx-auto">
          <img src="<?php echo $ligne['URL']; ?>" class="img-fluid mx-auto d-block" alt="Responsive-image Les Solaires"><br>  
          <p id="gold2"><?php echo $ligne['nom']; ?><br>
          <span id="produits"><?php echo $ligne["descr"]; ?><br>
          <?php echo ''.$ligne["prix"].' €*'; ?></span><br><br>
          <span id="gol"><?php echo $ligne['Ref']; ?></span>
          <form method="get" action="<?php echo $ligne['href']; ?>">
            <input id="btncata" type="submit" name="Commander" value="Plus d'infos" class="btn btn-success d-block mx-auto" />
          </form> 
        </div>
          
<?php

}

// PDO déconnexion: Facultatif car ferme la connexion automatiquement...
$connexion=NULL;

?>          
        </div>
      </div>

<br><br>
<p id="btncata">* Prix France Métropole TTC</p>
      
<!-- Début du footer --> 
<footer class="footer mt-auto py-3 bg-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 mx-auto"><br>
          <p class="gold">NOS PRODUITS</p>
            <a style="text-decoration:none" href="LesBasesDuBienEtre.php">
                  <div class="link">
                    <p>Les bases du bien-être</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="FitnessEtMinceur.php">
                  <div class="link">
                    <p>Fitness et minceur</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="Nutrition.php">
                  <div class="link">
                    <p>Nutrition</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="LesProduitsDeLaRuche.php">
                  <div class="link">
                    <p>Les produits de la ruche</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="LesIndispensables.php">
                  <div class="link">
                    <p>Les indispensables</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="Visage.php">
                  <div class="link">
                    <p>Visage</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="CorpsEtCheveux.php">
                  <div class="link">
                    <p>Corps et cheveux</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="LesSolaires.php">
                  <div class="link">
                    <p>Les Solaires</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="LesParfums.php">
                  <div class="link">
                    <p>Les parfums</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="Maison.php">
                  <div class="link">
                    <p>Maison</p>
                  </div>
                </a>
                <a style="text-decoration:none" href="Animaux.php">
                  <div class="link">
                    <p>Animaux</p>
                  </div>
                </a>
          </div>
          <div class="col-md-4 mx-auto"><br>
            <ul>
              <p class="gold">MODES DE LIVRAISON</p>
                <p>Point relais Chronopost, livraison 48/72H pour une commande effectuée avant 12H45 du lundi au vendredi<br>
                Tarif 3 €  Gratuit à partir de 100 € d'achat<br><br>
                Domicile Chronopost 24H<br>
                Tarif 10 € Gratuit à partir de 100 € d'achat</p>
            </ul>
          </div>
          <div class="col-md-4 mx-auto"><br>
            <ul>
              <p class="gold">RAPPEL</p> 
                <p>Toute personne, sous traitement médical, doit obtenir l'accord de son médecin traitant avant la prise de tout complément alimentaire.
                Nos produits sont destinés à des personnes bien portantes pour garder équilibre et bien-être et ne peuvent en aucun cas remplacer un traitement médical.<br><br>
                Les articles présentés dans notre catalogue sont distribués exclusivement en Vente Directe.<br><br>
                Pour votre santé, mangez au moins 5 fruits et légumes par jour, pratiquez une activité physique régulière, évitez de manger trop gras, trop sucré et trop salé et évitez de grignoter entre les repas.<br>
                Plus d'infos sur: <a style="color:rgb(34, 177, 76) !important;" class="link" href="http://www.mangerbouger.fr/">mangerbouger.fr</a></p>               
                <img src="https://img.icons8.com/plasticine/24/000000/phone.png"> 06 31 17 38 80</p>
            </ul>
          </div>
      </div>
    </div>
    <div class="container-fluid">
      <div id="footer" class="row mx-auto">
        <div class="col-sm-3 ml-auto">
          <a href="http://www.fvd.fr/"><img src="../images/Accueil/labels/fvd-100.png" class="img-fluid"></a>
          <a href="http:///www.foreverliving.fr/"><img src="../images/Accueil/labels/ForeverLogo.png" class="img-fluid"></a>
          <a href="https://www.foreverliving.fr"><img src="../images/Accueil/labels/FBO.png" class="img-fluid"></a> 
        </div>
        </div><br>
        <div class="row mx-auto text-center">
        <div class="col-sm-3 mx-auto"><a class="gold" style="text-decoration:none" href="../pages/CGV/cgv.html">CGV</a></div>
        <div class="col-sm-3 mx-auto"><a class="gold" style="text-decoration:none" href="../pages/MentionsLegales/MentionsLegales.html">Mentions légales</a></div>
        <div class="col-sm-3 mx-auto"><a class="gold" style="text-decoration:none" href="../pages/PolitiqueConfidentialite/Confidentialite.html">Confidentialité</a></div>
        <div class="col-sm-3 mx-auto" class="gold" style="font-weight:bold; font-size:19px; font-family:'Dancing Script', cursive;">© Aloeprevention.fr 2019</div>
      </div>
      </div>
    </footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>