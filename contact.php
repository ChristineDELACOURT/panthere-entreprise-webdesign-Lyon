<!doctype html>
<html lang="Default">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="contact, seo, google, site web, site internet, agence webdesign Lyon">
    <meta name="description" content="La Panthère est une entreprise de weddesign à Lyon qui accompage les entreprises à devenir attractives grâce à un site Internet d'excellente qualité">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="robots" content="index, follow">
	<link rel="shortcut icon" type="image/png" href="./img/favicon.jpg">
    
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./css/et-line.css">
	
    <title>contact La Panthère entreprise webdesign Lyon</title> 

<!-- Analytics -->
 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GEF7WEJGBK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GEF7WEJGBK');
</script>
<!-- Analytics END -->
    
</head>
<body>
<!-- Principal conteneur -->
<main class="page-container">
    
<!-- bloc-0 -->
<header class="bloc bgc-white l-bloc " id="bloc-0">
	<div class="container bloc-sm">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="img/agence-la-panthere-monochrome.svg" alt="logo la panthère entreprise webdesigne Lyon" height="40" /></a>
				<!-- <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button> -->
			</div>
			<div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a href="index.html">Accueil</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!-- bloc-0 END -->

<!-- bloc-6 -->
<div class="bloc bg-dots-bg bg-banniere d-bloc bloc-bg-texture texture-paper" id="bloc-6">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center hero-bloc-text tc-tangerine">
					Parlons web design !
				</h1>
				<p class="text-center mg-lg tc-white tight-width-whitespace">
					Nous sommes ravis que vous souhaitiez collaborer avec notre agence.<br>
					Parlez-nous de votre projet en complétant le formulaire ci-dessous.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-6 END -->
<?php
$nom  = $_POST['name'];
$email  = $_POST['email'];
$origine  = $_POST['origine'];
$message  = $_POST['message'];
?>
<!-- bloc-7 -->
<div class="bloc bgc-white l-bloc" id="bloc-7">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-6">
				<form id="form_1" novalidate success-msg="Your message has been sent." fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!">
					<div class="form-group">
						<label>
							Nom
						</label>
						<input id="name" name="name" placeholder="Dupont" class="form-control" value="<?php echo isset($nom) ? $nom : '';?>" required>
					</div>
					<div class="form-group">
						<label>
							Adresse email
						</label>
						<input id="email" name="email" placeholder="jean.dupont@site.org" class="form-control" type="email" required value="<?php echo isset($email) ? $email : '';?>" pattern="[a-zA-Z0-9\-\._]*@[a-zA-Z0-9\-\._]*.[a-zA-Z]*">
					</div>
					<div class="form-group">
						<label>
							Comment nous avez-vous connus ?
						</label>
						<input id="origine" name="origine" class="form-control" type="email" required  />
					</div>
					<div class="form-group">
						<label>
							Brief de votre projet (Ajoutez autant de détails que nécessaire)<br>
						</label>
						<textarea id="message" name="message" class="form-control" rows="4" cols="50" required></textarea>
					</div>
					<?php 
					if (isset($_POST['soumettre'])) {
						$name = $_POST['name'];
						$email = $_POST['email'];
						$origine = $_POST['origine'];
						$message = $_POST['message'];
						$to = 'christine.delacourt@laposte.net'; // Email submissions are sent to this email
						$email_subject = "Message du site web";
						$email_body = "Vous avez reçu un nouveau message. \n\n".
									  "Name: $name \nEmail: $email \nOrigine: $origine \nMessage: $message \n";
						$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
						$headers .= "From: christine.delacourt@laposte.net\n";
						$headers .= "Reply-To: $email";	
						
						mail($to,$email_subject,$email_body,$headers); // Post message
						return true;		
						header('Location: priseencompte.php');
						echo 'Message pris en compte';
						}
						?>
					<input class="bloc-button btn btn-lg btn-block cta-hero btn-atomic-tangerine" type="submit" name="soumettre" value="Envoyer">
	<!--				<button class="bloc-button btn btn-lg btn-block cta-hero btn-atomic-tangerine" type="submit">
						Envoyer
					</button> -->
				</form>
			</div>
			<div class="col-sm-6">
				<p>
					christine.delacourt@laposte.net<br>2 place Sathonay 69001 Lyon<br>Ouvert de 9h à 18h, du lundi au vendredi<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-7 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->

<footer class="bloc bgc-atomic-tangerine d-bloc">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center tc-tangerine">
					Agence La Panthère - Agence web basée à Lyon.<br>
				</p>
				<div class="row row-no-gutters social">
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="https://twitter.com"><span class="fa fa-twitter icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="https://www.facebook.com"><span class="fa fa-facebook icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="https://dribble.com"><span class="fa fa-dribbble icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" href="https://www.instagram.com/"><span class="fa fa-instagram icon-md"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</main>
</body>
</html>
