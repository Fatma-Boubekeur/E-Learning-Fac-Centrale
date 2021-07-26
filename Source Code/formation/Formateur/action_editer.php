<?php

include("connection.php");
$id_module=$_GET["id_module"];
$id_chapitre=$_GET["id_chapitre"];


if(isset($_POST["btn_valider"])){
$nom_chapitre=escape_dangerous_data($_POST["nom_chapitre"]);
$description=escape_dangerous_data($_POST["description"]);



$q="update chapitre set nom_chapitre='$nom_chapitre',description='$description' where id_chapitre=$id_chapitre and id_module=$id_module";

mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:liste_chapitre_module.php?id_module=$id_module");

}







 ?>