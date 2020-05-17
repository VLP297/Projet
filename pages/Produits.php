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
    <meta name="description" content="Informez vous au travers de cette page sur le procédé de fabrication de nos pulpes, de la récolte des plantations au produit fini, et comprenez pourquoi la qualité de notre aloe vera est unique au monde.">
    <meta name="author" content="Aloeprevention">    
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="canonical" href="https://www.aloeprevention.fr/pages/Produits.php">
    
    <!-- Open Graph meta pour Facebook -->
    <meta property="og:title" content="Produits - Aloeprevention" />
    <meta property="og:url" content="https://www.aloeprevention.fr/pages/Produits.php" />
    <meta property="og:image" content="https://www.aloeprevention.fr/images/Logo/Aloeprevention.png" />
    <meta property="og:description" content="Informez vous au travers de cette page sur le procédé de fabrication de nos pulpes, de la récolte des plantations au produit fini, et comprenez pourquoi la qualité de notre aloe vera est unique au monde." />
    <meta property="og:site_name" content="Aloeprevention" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Une qualité inégalée qui n'est pas due au hasard - Aloeprevention</title>
  </head>
  
  <?php include ("navbarpages/navbar.php"); ?>

  <!-- Début du body -->
  <body>
    
    <br><br>
	<div class="container-fluid">     
      <div class="row mx-auto text-center">
 		<div class="col-sm-6 mx-auto">
			<h1 id="titre"><hr>Consommer mieux tout en faisant<br> des économies c'est possible !<hr></h1>
		</div>
		<div class="col-sm-7 mx-auto">
		  <ul id="txtproduits" class="text-justify"><br>
			<li>La qualité exceptionnelle des produits Forever à base d’Aloe vera n’est plus à démontrer</li><br>
			<li>Ils sont disponibles sans intermédiaires, uniquement en vente directe</li><br>
			<li>Nos cosmétiques et produits d’hygiène au conditionnement généreux sont concentrés en gel d’Aloe vera ,1er ingrédient de nos produits. Vous en mettez peu et ils durent longtemps !</li><br>
			<li>Un exemple ? Notre gel dentaire à la menthe, Forever Bright ref 28 conditionné en grand tube de 130 ml qui dure au moins 4 mois pour une personne. Prix 11,20 € soit 2,80 € par mois.</li><br>
			<li>Un autre exemple ? Notre stick déodorant Aloes ref 67 fait 192,1 g et dure au moins 6 mois. Son prix est de 11,45 € soit 1,90 € par mois</li><br>
			<li>Et ce n’est pas tout… Vous pourriez faire encore plus d’économies avec le <br><a class="link" href="Client15.php"><span style ="color:rgb(40,167,69);">Pack découverte - 30 %</span></a> !</li>
		  </ul>
		<br><p id="txtproduits" class="text-justify">Maintenant c’est vous qui décidez si vous voulez tester les produits Forever. Une chose est sûre, vous ne pourrez plus vous en passer !!</p>
		</div> 
     </div>
    </div>
    

<!-- PHP-PDO Connexion à la base de donnée aloeprevention, requête selection de * de categories -->
<?php
$dsn='mysql:host=localhost;dbname=aloeprevpiavfmlp;charset=utf8';
$user='root'; 
$pass='';

$ligneCount = 0; 

try{
    $connexion = new PDO($dsn, $user, $pass);
    $resultat = $connexion->query("SELECT * FROM categories");
    $resultat->setFetchMode(PDO::FETCH_ASSOC);
    }

catch(Exception $e){
    echo 'Une erreur est survenue !';
    Die();
    }

foreach($resultat as $ligne){

if(isset($ligne['Titre'])) echo '</div><p id="titre" class="display-3 mx-auto"><br>'.$ligne['Titre'].'<br><br></p><div class="row mx-auto">';         

?>

      <!-- Suite du body -->
       <div class="col-sm-5 d-block mx-auto">
        <div class="overlay-image">
          <a href="<?php echo $ligne['href']; ?>"><?php echo ('<img src="'.$ligne['URL'].'" class="img-thumbnail mx-auto d-block" alt="'.$ligne['Nom'].'">'); ?> 
            <div class="hover">
              <div class="text">
                <?php echo $ligne['Nom']; ?>
              </div>
            </div>
          </div></a>
        </div>

<?php

$ligneCount++;

if($ligneCount == 2 || $ligneCount == 6 || $ligneCount == 8) echo '</div><br><br><div class="row"><br>';  

}

?>          
        </div>
      </div>

<!-- Sauts de ligne --> 
<br><br>
	<div class="container-fluid">     
      <div class="row mx-auto text-center">
          <div class="col-sm-8 mx-auto">
		   <h2 id="titre">Bien être et beauté, la qualité Forever fait la différence</h2><br>
		  </div>
          <div class="col-sm-6 mx-auto">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QI5soLCPTWE" allowfullscreen></iframe>
            </div>
            <p class="text-left" id="txtproduits"> Nous sommes les seuls à vous proposer, l'emballage Tetrapak :</p>
			<ul class="text-left" id="txtproduits">
			<li>Préserve toutes les vertus de l’Aloe vera</li>
			<li>Permet d’utiliser 0 conservateur</li>
			<li>100 % recyclable</li>
			<li>Totalement opaque (l’Aloe vera est sensible à la lumière)</li>
			<li>Pas de migration de substances présentes dans les plastiques</li>
			<li>Empreinte carbone de 87 g de CO2 pour une bouteille Tetrapak d’un litre contre 345 g de CO2 pour une bouteille en verre 10 x plus lourde.</li>
			</ul>
          </div>
          <div class="col-sm-6 mx-auto">
            <img class="img-fluid" src="../images/Produits/Dermatest.jpg" alt="Forever dispose du label qualité indépendant d'excellence Dermatest">
			<p id="txtproduits" class="text-justify">Nos cosmétiques sont testés et approuvés par l'institut scientifique allemand indépendant Dermatest ce qui garantit leur parfaite sécurité pour les consommateurs.</p>
          </div>
	  </div>
	</div> 
	<br><br>

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
                <p>Point relais Chronopost, livraison 48/72H pour une commande effectuée avant 12H45 du lundi au vendredi
                <br>Tarif 3 €  Gratuit à partir de 100 € d'achat<br>
                <br>Domicile Chronopost 24H
                <br>Tarif 10 € Gratuit à partir de 100 € d'achat</p>
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