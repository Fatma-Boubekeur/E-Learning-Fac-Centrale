<?php 
include("connection.php");
if(isset($_GET["id_formation"])){
$id_formation=$_GET["id_formation"];
$id_niveau=$_GET["id_niveau"];

$q="delete from table_niveau where id_formation=$id_formation and id_niveau=$id_niveau";
$res=mysqli_query($link,$q)or die(mysqli_error($link));
header("Location:niveau_formation.php?id_formation=$id_formation");

}

?>