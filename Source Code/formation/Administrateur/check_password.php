<?php  

$connect = mysqli_connect("localhost", "root", "", "formation"); 
if(isset($_POST["password"]))
{
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $password=md5($password);
 $query = "SELECT * FROM utilisateur WHERE mot_de_passe = '".$password."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>