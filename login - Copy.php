<?php 
include("dbconfig.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// emailPersonne and password received from loginform 
$nom_v=mysqli_real_escape_string($dbconfig,$_POST['nom_v']);
$pwd_v=mysqli_real_escape_string($dbconfig,$_POST['pwd_v']);


// pour les respensable de l'administrateur des hotels
$sql_query="SELECT id_v FROM visiteur WHERE nom_v='$nom_v' and pwd_v='$pwd_v'";




$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$type=$row["id_v"];
$count=mysqli_num_rows($result);


// If result matched $emailPersonne and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$nom_v;

if($type==1)

header("location: ../index.html");

else if($type==2)
header("location: ../Promotions/listePromotions.php");
}
else
{
$error="emailPersonne or Password is invalid";
}
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script type="text/javascript" src="JsCalendrier.js"></script>
    <script type="text/javascript" src="NJs.js"></script>
    
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script> 
    

<!--
Puzzle Template
http://www.templatemo.com/tm-477-puzzle
-->

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>


<body>
    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#home"><img src="images/logo_final.png"></a>
    </div>
            
        </div> 
	<ul id="menu">
		<li><a href="#conn">Connecxion</a></li>
        <li><a href="#insc">Inscription</a></li>
		
	</ul>
</nav>
</div>
    </div>
    </div>
<br><br><br><br><br><br><br><br><br>
  <div class="container">
  <section class="col-md-12 content"   id="acc">
          
  <div>                      
   

                <!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
           
 



<!-- ***************************************************************************************************  connexion  ********************** -->
   <section class="col-md-12 content" id="conn">
       
       <div class="col-lg-6 col-md-6 col-md-push-6 content-item background flexbox" >
           <h2 class="section-title">Authentifiation</h2>

           <!--<div class="row"> -->
           <form method="post"  name="loginform" class="contact-form" >
             <!-- Login -->
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input  id="username" name="nom_v" type="text"  class="form-control" placeholder="Your Login..." required>
                </div>    
            </div>
               <!-- password -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input id="pwd_v" name="pwd_v"  type="password"  class="form-control"  placeholder="Your Password..." required>
                </div>    
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <center><button type="submit" id="form-submit"  class="btn green-btn normal-btn">Connexion</button></center>
                </div>   
            </div>
        </form>
        <!--</div> -->
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <img src="images/con2.png" alt="Image" class="tm-image">
    </div>

</section>
   <!-- **********************************************************************************************  Inscription************************ --> 

      
        <section class="col-md-12 content" id="insc">
      <div class="col-lg-6 col-md-6 content-item background flexbox">
        
            <h2 class="section-title">Inscription</h2>
           

            <form method="post" action="ajoutPhp.php"  name="contact-form" class="contact-form">
                <!-- id-->
                    <input type="hidden" name="idp" size="20" maxlength="35">
                <!-- nom-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom de famille..." required>
                </div> 
            </div>
                
                 <!-- Nom de famille -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input name="prenom" type="text" class="form-control" id="prenom" placeholder="prenom..." required>
                </div>    
            </div>
                 <!--  e-mail-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="mail" type="email" class="form-control" id="mail" placeholder=" e-mail..." required>
                </div>    
            </div> 
                <!-- password -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="pwd" type="password" class="form-control" id="pwd" placeholder="Mot de passe..." required>
                </div>    
            </div>
                
                
                <!-- boutton -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <center><button type="submit" id="form-submit"  class="btn green-btn normal-btn" name="valider" value="Valider"  >Inscription</button>
                    <button type="reset" class="btn yellow-btn normal-btn">Annuler</button>
                    </center>
                </div>    
            </div>
        </form>
           
                   
       </div>
        
       <div class="col-lg-6 col-md-6 content-item background flexbox">
           <img src="images/insc.jpg" alt="Image" class="tm-image">
                   
       </div>
   </section>
      
        




</div>

<div class="text-center footer">
    <br>
	<div class="container">
		GHNIMI Yosra 
    	| MABROUK Wafa
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>

<script>

// Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 50) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});

$(window).on("scroll", function() {
    checkScrollPosition();    
});
</script>
 


</body>
</html>