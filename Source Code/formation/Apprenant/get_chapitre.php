<?php 
session_start();
include("connection.php");


if(isset($_GET['offset']) && isset($_GET['limit'])){

$limit=$_GET['limit'];
$offset=$_GET['offset'];

$id_module=$_GET["id_module"];

$data=mysqli_query($link,"select * from chapitre  where id_module=$id_module LIMIT {$limit} OFFSET {$offset}");

while($row=mysqli_fetch_array($data)or die(mysqli_error($link))){

echo '<div class="col-xs-12 col-sm-4" style="margin-top:30px;margin-bottom: 50px;">
                        <div class="card">
                            <a class="img-card" href="ressource.php?id_chapitre='.$row["id_chapitre"].'&id_module='.$row["id_module"].'" >
                            <img src="images/dossier.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                <a href="ressource.php?id_chapitre='.$row["id_chapitre"].'&id_module='.$row["id_module"].'" style="font-size:22px;">'.$row["nom_chapitre"].'
                                  </a>
                                </h4>
                                <p class="" style="font-size:16px;">
                                 '.$row["description"].'
                                </p>
                            </div>
                            <div class="card-read-more" style="padding-top: 20px;padding-bottom:20px;">
                                <a href="ressource.php?id_chapitre='.$row["id_chapitre"].'&id_module='.$row["id_module"].'" style="font-size:22px;">
                                   Afficher ressources
                                </a>
                            </div>
                        </div>
                    </div>';
   





}
}
?>