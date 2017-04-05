<script type="text/javascript">
function hello()
{ 
document.location.href="index.php" 
}
</script>
      <?php
      
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'esprim';
$conn = mysqli_connect($host,$username,$password,$database);

// On commence par récupérer les champs 

      
if(isset($_POST['nom']))       $nomm=$_POST['nom'];          else      $nomm="";

if(isset($_POST['prenom']))    $prenomm=$_POST['prenom'];    else      $prenomm="";
      
if(isset($_POST['mail']))      $maill=$_POST['mail'];        else      $maill="";

if(isset($_POST['pwd']))       $pwdd=$_POST['pwd'];          else      $pwdd="";

if(isset($_POST['idp']))       $idp=$_POST['idp'];           else      $idp="";
      

 //print_r($image);
$sql = "INSERT INTO visiteur(nom_v,prenom_v,mail_v,pwd_v) VALUES ('$nomm','$prenomm','$maill','$pwdd')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// on ferme la connexion à la base
//mysql_close();

echo"<center>";
echo"<FONT color='white'> Insertion reusite !</font>";
echo"<br>";

echo "<input type='button'  class='btn'  onclick= 'hello();' value='retour'>";

echo"</center>";

?>