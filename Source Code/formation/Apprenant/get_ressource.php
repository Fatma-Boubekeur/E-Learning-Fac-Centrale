<?php 
session_start();
include("connection.php");


if(isset($_GET['offset']) && isset($_GET['limit'])){

$limit=$_GET['limit'];
$offset=$_GET['offset'];

$id_chapitre=$_GET["id_chapitre"];

$data=mysqli_query($link,"select * from ressource  where id_chapitre=$id_chapitre LIMIT {$limit} OFFSET {$offset}");

while($row=mysqli_fetch_array($data)or die(mysqli_error($link))){

echo '<div class="col-xs-12 col-sm-4" style="margin-top:30px;margin-bottom: 50px;">
                        <div class="card">
                            <a class="img-card" href="../Formateur/Ressource du cours/'.$row["contenue"].'" >
                            <img src="images/Citation_Icon.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                <a href="../Formateur/Ressource du cours/'.$row["contenue"].'"  style="font-size:22px;">'.$row["nom_ressource"].'
                                  </a>
                                </h4>
                            </div>
                            <div class="card-read-more" style="padding-top: 20px;padding-bottom:15px;">
                    <a href="../Formateur/Ressource du cours/'.$row["contenue"].'" style="font-size:17px;">
                                   Cliquer ici pour consulter la ressource
                                </a>
                            </div>
                        </div>
                    </div>';
   





}
}
?>