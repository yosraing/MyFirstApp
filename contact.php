<script type="text/javascript">
function hello()
{ 
 echo "New record created successfully";
}
</script>
      <?php
      
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'esprim';
$conn = mysqli_connect($host,$username,$password,$database);
      
if(isset($_POST['nom']))       $nomm=$_POST['nom'];           else      $nomm="";

if(isset($_POST['mail']))      $maill=$_POST['mail'];          else      $maill="";
      
if(isset($_POST['sujet']))     $sujett=$_POST['sujet'];        else      $sujett="";

if(isset($_POST['msg']))       $msgg=$_POST['msg'];           else       $msgg="";
       

 //print_r($image);
$sql = "INSERT INTO contact(nom_c,mail_c,sujet_c,msg_c) VALUES ('$nomm','$maill','$sujett','$msgg')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo"<center>";
echo"<FONT color='white'> Insertion reusite !</font>";
echo"<br>";

echo "<input type='button'  class='btn'  onclick= 'hello();' value='retour'>";

echo"</center>";

?>