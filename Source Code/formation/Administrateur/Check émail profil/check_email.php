<?php  


$id_user=$_GET["id_user"];

$connect = mysqli_connect("localhost", "root", "", "formation"); 
if(isset($_POST["email"]))
{
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "SELECT * FROM utilisateur WHERE email = '".$email."' and id_user !=$id_user ";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>