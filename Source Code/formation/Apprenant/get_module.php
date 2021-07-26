<?php 
session_start();
include("connection.php");


if(isset($_GET['offset']) && isset($_GET['limit'])){

$limit=$_GET['limit'];
$offset=$_GET['offset'];

$id_apprenant=$_SESSION['id_user_session'];

$q="select * from apprenant where id_user=$id_apprenant ";
$res=mysqli_query($link,$q)or die(mysqli_error($link));
$row2=mysqli_fetch_array($res)or die(mysqli_error($link));
$id_niveau_formation=$row2["id_niveau_formation"];



$data=mysqli_query($link,"select * from module where id_niveau_formation=$id_niveau_formation LIMIT {$limit} OFFSET {$offset}");

while($row=mysqli_fetch_array($data)or die(mysqli_error($link))){
echo '

            <div class="col-xs-12 col-sm-4" style="margin-top:0px;margin-bottom: 50px;">
                <div class="card">
                          <a class="img-card" href="chapitre.php?id_module='.$row["id_module"].'">
                            <img src="images/books-computer-wallpaper-49799-51477-hd-wallpapers.jpg" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="chapitre.php?id_module='.$row["id_module"].'" style="font-size: 22px; margin-top:20px;">'.$row["nom"].'
                                  </a>
                                </h4>
                              
                            </div>
                            <div class="card-read-more" style="padding-top: 20px;padding-bottom:20px;">
                                <a href="chapitre.php?id_module='.$row["id_module"].'" style="font-size: 18px;">
                                    Afficher chapitres
                                </a>
                            </div>
                </div>         
            </div> ';
   





}
}
?>