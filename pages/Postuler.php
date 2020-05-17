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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Entreprenez avec nous avec un modèle économique en pleine croissance basé sur l'entraide, le respect de chaque personne et la reconnaissance du travail">
    <meta name="author" content="Aloeprevention">
    <link rel="canonical" href="https://www.aloeprevention.fr/pages/Postuler.php">    
    <link rel="stylesheet" href="../styles/style.css">
    
    <!-- Open Graph meta pour Facebook -->
    <meta property="og:title" content="Postuler - Aloeprevention" />
    <meta property="og:url" content="https://www.aloeprevention.fr/pages/Postuler.php"/>
    <meta property="og:image" content="https://www.aloeprevention.fr/images/Logo/Aloeprevention.png" />
    <meta property="og:description" content="Entreprenez avec nous avec un modèle économique en pleine croissance basé sur l'entraide, le respect de chaque personne et la reconnaissance du travail" />
    <meta property="og:site_name" content="Aloeprevention" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Postuler - Aloeprevention</title>
  </head>
  
<?php include ("navbarpages/navbar.php"); ?>

  <!-- Sauts de ligne --> 
  <br><br>
  
  <!-- Début du body -->
  <body id="contact">
    <div class="container-fluid">
      <div class="row mx-auto">
        <div class="col-sm-9 mx-auto">
          <p id="produits">Vous avez décidé de prendre votre vie en main ? Remplissez le questionnaire et nous examinerons votre candidature</p> 
        </div> 
      </div> 
    </div>
    <br>

  <!-- Début du formulaire -->
    <div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-row justify-content-center">
          <div class="col-md-2">
            <input name="nom" type="text" class="form-control" placeholder="Nom *" required>
          </div>
          <div class="col-md-2">
           <input name="prenom" type="text" class="form-control" placeholder="Prénom *" required>
          </div>
          <div class="col-md-3">
           <div class="form-group">
            <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail *" required>
           </div>
          </div> 
      </div> 
      <br>   
      <div class="form-row justify-content-center">
        <div class="col-md-7">  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">Vous souhaitez:</label>
            </div>
            <select name="vendre" class="custom-select" id="inputGroupSelect02" required>
            <option value="Vendre les produits pour compléter ses revenus">Vendre les produits pour compléter vos revenus</option>
            <option value="Vendre les produits et développer un réseau de distributeurs sans limite de rémunération">Vendre les produits et développer un réseau de distributeurs sans limite de rémunération</option>
            </select>
         </div>
       </div>    
      </div> 
      <div class="form-row justify-content-center">
        <div class="col-md-7">  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect03">Votre situation actuelle:</label>
            </div>
            <select name="situation" class="custom-select" id="inputGroupSelect03" required>
            <option value="Salarié">Salarié</option>
            <option value="commerçant">commerçant</option>
            <option value="Indépendant">Indépendant</option>
            <option value="Chômeur">Chômeur</option>
            <option value="Retraité">Retraité</option>
            <option value="Autre">Autre</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-row justify-content-center"> 
        <div class="col-md-7">  
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect04">Combien d’heures par semaine êtes-vous prêt(e) à consacrer à l’activité Forever ?</label>
            </div>
            <select name="activite"class="custom-select" id="inputGroupSelect04" required>
            <option value="2h">2h à 3h</option>
            <option value="3h">3h à 6h</option>
            <option value="6h">6h à 15h</option>
            <option value="+15h">+ de 15h</option>
            </select>
          </div>
        </div> 
      </div>
      <br>   
      <div class="form-row justify-content-center">
        <div class="col-md-7">
          <div class="form-check">
           <label class="form-check-label" for="inlineCheckbox1">Quelle est votre motivation à vous lancer dans ce nouveau projet ?</label>
            <textarea name="motivation"class="form-control" id="validationTextarea1"></textarea>
          </div> 
        </div>
      </div>
      <br>
      <div class="form-row justify-content-center">
        <div class="col-md-7">
          <label class="form-check-label" for="inlineCheckbox1">Joignez votre CV ci-dessous (doc, docx, pdf, officedocument, rtf) :</label>
          <div class="custom-file">
            <input name="file" type="file" accept=".rtf,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choisir le fichier</label>
          </div>
        </div>
      </div>
      <br> 
      <div class="form-row">
        <div class="col text-center">
          <div class="form-group"> 
           <input id="btncata" type="submit" name="postuler" value="Envoyer" class="btn btn-warning" />
          </div>
        </div>
      </div>     
    </form>
    </div>

<?php

$message = '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';


if(isset($_POST["postuler"])){
  
  $vendre = htmlspecialchars(trim($_POST["vendre"]), ENT_QUOTES, "UTF-8");
  $nom = htmlspecialchars(trim($_POST["nom"]), ENT_QUOTES, "UTF-8");
  $prenom = htmlspecialchars(trim($_POST["prenom"]), ENT_QUOTES, "UTF-8");
  $email = htmlspecialchars(trim($_POST["email"]), ENT_QUOTES, "UTF-8");
  $situation = htmlspecialchars(trim($_POST["situation"]), ENT_QUOTES, "UTF-8");
  $activite = htmlspecialchars(trim($_POST["activite"]), ENT_QUOTES, "UTF-8");
  $motivation = htmlspecialchars(trim($_POST["motivation"]), ENT_QUOTES, "UTF-8");
  
  $message = '<h3 align="center">Nouveau contact client</h3>
  <table border="1" width="100%" cellpadding="5" cellspacing="5">
    <tr><td width="30%">Le postulant désire:</td><td width="70%">'.$vendre.'</td></tr>
    <tr><td width="30%">Nom:</td><td width="70%">'.$nom.'</td></tr>
    <tr><td width="30%">Prénom:</td><td width="70%">'.$prenom.'</td></tr>
    <tr><td width="30%">Courriel:</td><td width="70%">'.$email.'</td></tr>
    <tr><td width="30%">Situation du postulant:</td><td width="70%">'.$situation.'</td></tr>
    <tr><td width="30%">Activité par semaine souhaitée par le postulant</td><td width="70%">'.$activite.'</td></tr>
    <tr><td width="30%">Motivation du postulant</td><td width="70%">'.$motivation.'</td></tr>
  </table>';

  // le répertoire où son envoyés les fichiers uploadés 
  $chemin = '../uploads/';

  // et la commande pour les mettre dans le bon répertoire 
  move_uploaded_file($_FILES["file"]['tmp_name'], $chemin.$_FILES["file"]['name']);
 
  $mail = new PHPMailer(true);
  $mail->CharSet = "utf-8";
  
  try{
    
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  ); 
  $mail->SMTPDebug ='0';
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'ssl://SSL0.OVH.NET:465';  //Sets the SMTP hosts of your Email hosting
  $mail->Port = '465';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = 'recrutement@aloeprevention.fr';     //Sets SMTP username
  $mail->Password = 'Recr2019/29700';     //Sets SMTP password
  $mail->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = $email;     //Sets the From email address for the message
  $mail->FromName = $prenom;    //Sets the From name of the message
  $mail->AddAddress('recrutement@aloeprevention.fr');  //Adds a "To" address
  $mail->WordWrap = 300;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML
  $mail->addAttachment("../uploads/".$_FILES["file"]['name']);  //Adds an attachment from a path on the filesystem
  $mail->Subject = ''.$prenom.', vient de postuler sur aloe-prevention.fr';    //Sets the Subject of the message
  $mail->Body = $message;       //An HTML or plain text message body
  $mail->Send();        //Send an Email. Return true on success or false on 
  
  unlink ("../uploads/".$_FILES['file']['name']);


  echo 'AloePrevention.fr vous remercie, votre formulaire a été envoyé avec succès !';
  }
  catch (Exception $e) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
  }

}

?>

  <!-- Sauts de ligne -->
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
          <a href="https://www.foreverliving.fr"><img src="../images/Accueil/labels/FBO.png" class="img-fluid"></a> 
          <a href="http:///www.foreverliving.fr/"><img src="../images/Accueil/labels/ForeverLogo.png" class="img-fluid"></a>
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