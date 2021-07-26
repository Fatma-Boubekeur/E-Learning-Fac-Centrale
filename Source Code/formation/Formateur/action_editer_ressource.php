<?php 

include("connection.php");
$id_ressource=$_GET["id_ressource"];
$id_chapitre=$_GET["id_chapitre"];
$id_module=$_GET["id_module"];
if(isset($_POST["btn_valider"])){
$nom_ressource=escape_dangerous_data($_POST["nom_ressource"]);
$file=escape_dangerous_data($_POST["file"]);


if((isset($_FILES['ressource']['name'] )) && ($_FILES['ressource']['name']!="")){

unlink( "Ressource du cours/".$file);

$file=$_FILES['ressource']['name'];
$file_tmp_name=$_FILES ['ressource']['tmp_name'];
move_uploaded_file($file_tmp_name,"Ressource du cours/$file");
}


$q="update ressource set nom_ressource='$nom_ressource',contenue='$file'";

mysqli_query($link,$q)or die(mysqli_error($link));

header("Location:ressource_chapitre.php?id_chapitre=$id_chapitre&id_module=$id_module");

}

?>