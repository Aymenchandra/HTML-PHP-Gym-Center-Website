<?php 
  session_start();
  if(isset($_COOKIE["admin"]) and isset($_COOKIE["pass"]))
  {
    header("REFRESH:0.5:URL=php/welcome.php");
  }
  if(isset($_COOKIE["email"]) and isset($_COOKIE["motdepass"]))
  {
    header("REFRESH:0.5;URL=php/welcome.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Fitness Website Project</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="#main"><img src="images/logo.png" width="80" height="30" alt="iLand" /></a> </div>

        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="#main">Acceuil</a></li>
            <li><a class="page-scroll" href="#classes">Cours</a></li>
            <li><a class="page-scroll" href="#features">Fonctionnalités</a></li>
            <li><a class="page-scroll" href="#review">Avis</a></li>
            <li><a class="page-scroll" href="#pricing">Tarification</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
            <li><a class="page-scroll" href="#button-box">Connecter</a></li>
          </ul>
        </div>
      </div>
    </nav>

  </div>

  
  <div class="main app form" id="main">
    <div class="hero-section">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">SANTÉ POUVOIR BONHEUR</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> Apportez à la table des stratégies de survie gagnant-gagnant pour assurer une domination proactive.</p>
            <a href="#" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Commencer</a> </div>
        </div>
      </div>
    </div>
    <div class="pitch text-center" id="classes">
      <div class="container">
        <div class="pitch-intro">
          <h1 class="wow fadeInDown" data-wow-delay="0.2s">TOUT EST POSSIBLE AVEC NOUS</h1>
          <p class="wow fadeInDown" data-wow-delay="0.2s">“Le sport est dépassement de soi. Le sport est école de vie.”</p>
        </div>
        <div class="col-md-12">
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
            <div class="pitch-content">
              <h1>ENTRAÎNEMENT PERSONNEL</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-mic-outline"></i> </div>
            <div class="pitch-content">
              <h1>Entraînement cardio-vasculaire</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Formation en style libre</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Nutrition sportive</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Entraînement fonctionnel</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Crossfit</h1>
              <p> Performance ou certains patients, c'est le sponsor. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="app-features text-center" id="features">
      <div class="container">
        <h1 class="wow fadeInDown" data-wow-delay="0.1s">MA PROMESSE À TOI</h1>
        <p class="wow fadeInDown" data-wow-delay="0.2s"> Des flèches réservées, une salade et une jupe qui sont faciles d'entretien. Cuire au micro-ondes jusqu'à ce qu'il soit <br class="hidden-xs">
          vallée, et une simple vie, est et lectus viverra sapien. </p>
        <div class="col-md-4 features-left text-right">
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
            <div class="icon"> <i class="ion-ios-list-outline"></i> </div>
            <div class="feature-single">
              <p>Will create a plan that’s tailored to your situation and create your everyday nutrition strategies.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.3s">
            <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
            <div class="feature-single">
              <p>Bring to the table win-win survival strategies to ensure proactive domination.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.4s">
            <div class="icon"> <i class="ion-ios-pulse"></i> </div>
            <div class="feature-single">
              <p>Will create a plan that’s tailored to your situation and create your everyday nutrition strategies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.5s"> <img class="img-responsive" src="images/iPhone-app.png" alt="App" /> </div>
        <div class="col-md-4 features-left text-left">
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon"> <i class="ion-ios-americanfootball-outline"></i> </div>
            <div class="feature-single">
              <p> Bring to the table win-win survival strategies to ensure proactive domination.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.7s">
            <div class="icon"> <i class="ion-ios-heart-outline"></i> </div>
            <div class="feature-single">
              <p>Bring to the table win-win survival strategies to ensure proactive domination.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.8s">
            <div class="icon"> <i class="ion-ios-analytics-outline"></i> </div>
            <div class="feature-single">
              <p>Will create a plan that’s tailored to your situation and create your everyday nutrition strategies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="images/app_image.png" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Keep your body fit & strong to <br>
            live longer</h1>
          <p class="wow fadeInUp"> La nutrition a besoin de piles et les ultricies du piment commencent. Même les joueurs, la télévision mais le besoin de boire, différents diamètres de football. Le stress est la peur et le chagrin dans les carottes de basket-ball, les iaculis grillés.</p>
          <ul class="wow fadeInUp">
            <li>Non, pas en classe de recettes de chili de football.</li>
            <li>Même les joueurs, la télévision mais le besoin de boire</li>
            <li>Performance ou certains patients, c'est le sponsor.</li>
            <li>Discutez ou voulez simplement tirer.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="split-features2">
      <div class="col-md-6 nopadding">
        <div class="split-content second">
          <h1 class="wow fadeInUp">See The Results and Feel the difference</h1>
          <p class="wow fadeInUp"> La nutrition a besoin de piles et les ultricies du piment commencent. Même les joueurs, la télévision mais le besoin de boire, différents diamètres de football. Le stress est la peur et le chagrin dans les carottes de basket-ball, les iaculis grillés.</p>
          <ul class="wow fadeInUp">
            <li>Non, pas en classe de recettes de chili de football.</li>
            <li>Même les joueurs, la télévision mais le besoin de boire</li>
            <li>Performance ou certains patients, c'est le sponsor.</li>
            <li>Discutez ou voulez simplement tirer.</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="images/app_image2.png" alt="Image" /> </div>
      </div>
    </div>
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="images/gym-3.jpg" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Command Performance You<br>
            deserve it</h1>
          <p class="wow fadeInUp"> La nutrition a besoin de piles et les ultricies du piment commencent. Même les joueurs, la télévision mais le besoin de boire, différents diamètres de football. Le stress est la peur et le chagrin dans les carottes de basket-ball, les iaculis grillés.</p>
          <ul class="wow fadeInUp">
            <li>Non, pas en classe de recettes de chili de football.</li>
            <li>Même les joueurs, la télévision mais le besoin de boire</li>
            <li>Performance ou certains patients, c'est le sponsor.</li>
            <li>Discutez ou voulez simplement tirer.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="feature-sub">
      <div class="container">
        <div class="sub-inner">
          <h1 class="wow fadeInUp">If it’s not personal, It’s not possible! See The Results and Feel the difference immediatly.</h1>
          <a href="#" class="btn btn-action wow fadeInUp">Commencer</a> </div>
      </div>
    </div>
    <div class="review-section" id="review">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="reviews owl-carousel owl-theme">
            <div class="review-single"><img class="img-circle" src="images/customer1.png" alt="Client Testimonoal" />
              <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                <p>Le football en a besoin. Lorem à l'heure actuelle, mais les carottes orange. <br>
                  Le refinancement. Dans la couche en direct</p>
                <h3>Johnathan Doe</h3>
                <h3>Responsable Marketing Média Matrix</h3>
              </div>
            </div>
            <div class="review-single"><img class="img-circle" src="images/customer2.png" alt="Client Testimonoal" />
              <div class="review-text">
                <p>Le football en a besoin. Lorem à l'heure actuelle, mais les carottes orange. <br>
                  Le refinancement. Dans la couche en direct</p>
                <h3>Oidila Matik</h3>
                <h3>- Président Lexovii </h3>
              </div>
            </div>
            <div class="review-single"><img class="img-circle" src="images/customer3.png" alt="Client Testimonoal" />
              <div class="review-text">
                <p>Le football en a besoin. Lorem à l'heure actuelle, mais les carottes orange. <br>
                  Le refinancement. Dans la couche en direct</p>
                <h3>- Alex Dattilo</h3>
                <h3>Le meilleur PDG</h3>
              </div>
            </div>
            <div class="review-single"><img class="img-circle" src="images/customer4.png" alt="Client Testimonoal" />
              <div class="review-text">
                <p>Le football en a besoin. Lorem à l'heure actuelle, mais les carottes orange. <br>
                  Le refinancement. Dans la couche en direct</p>
                <h3>- Robert Hammer</h3>
                <h3>Responsable du design omega Corp.</h3>
              </div>
            </div>
            <div class="review-single"><img class="img-circle" src="images/customer5.png" alt="Client Testimonoal" />
              <div class="review-text">
                <p>Le football en a besoin. Lorem à l'heure actuelle, mais les carottes orange. <br>
                  Le refinancement. Dans la couche en direct</p>
                <h3>- Rita Valentine</h3>
                <h3>PDG numérique</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="pricing" class="pricing-section text-center">
      <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
          <div class="pricing-intro">
            <h1 class="wow fadeInUp" data-wow-delay="0s">PACKAGES</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> La douleur Lorem ipsum est. Ils ont coupé mon travail, 'Heureux les conséquences des devoirs de leur rien n'est détesté <br class="hidden-xs">
              Au suivi, les services conduisent à une douleur qui repousse la teinte </p>
          </div>
          <div class="col-sm-6">
            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
              <div class="pricing-details">
                <h2>For Beginners</h2>
                <span>$49.50</span>
                <ul>
                  <li>Cross Kids </li>
                  <li>Born To Move </li>
                  <li>Box </li>
                  <li>Judo </li>
                </ul>
                <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
              <div class="pricing-details">
                <h2>For Professionals</h2>
                <span>$99.50</span>
                <ul>
                  <li>Cross Kids </li>
                  <li>Born To Move </li>
                  <li>Box </li>
                  <li>Judo </li>
                </ul>
                <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta-sub no-color" >
        <div class="hero">
          <div id="form-box">
              <div id="button-box">
                  <div id="btn"></div>
                  <button type="button" id="toggle-btn" onclick="login()">Connecter</button>
                  <button type="button" id="toggle-btn" onclick="register()">Inscrire</button>   
              </div>
              <form class="input-group" id="login" name="f" method="POST" action="php/connection.php">
                  <input type="text" id="input-field" name="email" placeholder="Email d'utilisateur..." >
                  <input type="password" id="input-field" name="mdp" placeholder="Mot de pass">
                  <input type="checkbox" id="check-box" name="souvenir"><span class="check-span">Se souvenir du mot de passe</span>    
                  <button type="submit" id="sumbit-btn" onclick="return verif()">Connecter</button>
              </form>
              <form class="input-group" id="register" name="f1" method="POST" action="php/register.php" onsubmit="return verif1()" >
                  <input type="text" id="input-field" name="email"placeholder="Email d'utilisateur..." >
                  <input type="text" id="input-field" name="nom"placeholder="Nom d'utilisateur...">
                  <input type="text" id="input-field" name="prenom"placeholder="Prenom d'utilisateur...">
                  <input type="password" id="input-field" name="mdp1"placeholder="Mot de pass">
                  <input type="password" id="input-field" name="mdp2"placeholder="Confirmation">
                  <input type="text" id="input-field" name="date"placeholder="Date De Naissance..."onblur="calc_age()">
                  <input type="text" id="input-field" name="age"placeholder="Age...">
                  
                  <input type="checkbox" id="check-box" name="C1"><span class="check-span">J'accepte les termes et conditions</span>    
                  <button type="submit" id="sumbit-btn"  >Inscription</button>
              </form>
          </div>
      </div>

    </div>
    
    <div class="footer" id="contact">
      <div class="container">
        <div class="col-md-3 contact footer-menu">
          <h1>Social</h1>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Github</a></li>
            <li><a href="#">Pinterest</a></li>
            <li><a href="#">Google Plus</a></li>
          </ul>
        </div>
        <div class="col-md-3 contact">
          <h1>Contact Us</h1>
          <p> Contact our 24/7 customer support if you have any questions. We'll help you out. </p>
          <a href="mailto:support@gmail.com">contact@iland.com</a> </div>
      </div>
    </div>
  </div>


  
</div>

</div>
<script type="text/javascript" src="js/controle.js"></script> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script src="js/jquery.subscribe.js"></script>
</body>
</html>
