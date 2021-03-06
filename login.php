<?php 
include("dbconfig.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// emailPersonne and password received from loginform 
$emailPersonne=mysqli_real_escape_string($dbconfig,$_POST['emailPersonne']);
$password=mysqli_real_escape_string($dbconfig,$_POST['password']);


// pour les respensable de l'administrateur des hotels
$sql_query="SELECT idPersonne,idVisiteur FROM personne WHERE emailPersonne='$emailPersonne' and password='$password'";




$result=mysqli_query($dbconfig,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$type=$row["idVisiteur"];
$count=mysqli_num_rows($result);


// If result matched $emailPersonne and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$emailPersonne;

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
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<title>PHP login script tutorial - click4knowledge.com</title>
<style>
body {
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post" action="" name="loginform">
    <input type="text" value="demo" placeholder="emailPersonne" id="username" name="emailPersonne" />
    <input type="password" value="demo" placeholder="Password" id="password" name="password" />
    <button type="submit">Submit</button>
    </form>
</div>
</body>

</html>