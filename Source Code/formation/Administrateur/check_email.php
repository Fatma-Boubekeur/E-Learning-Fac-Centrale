<?php  

$connect = mysqli_connect("localhost", "root", "", "formation"); 
if(isset($_POST["email"]))
{
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "SELECT * FROM utilisateur WHERE email = '".$email."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>