<?php 
session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
	header("Location: ..\index.php");
}else 
{
$_SESSION['newTry'] = 1;
?>

<?php
include("connection.php");

 ?>


<?php include'head.php';  ?>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/anythingslider.css">
    <script type="text/javascript" src="js/jquery.anythingslider.js"></script>


    <script type="text/javascript">
	$(document).ready(function(){
		$('#resultat').css('display', 'none');
		$('#next').click(function(){alert('ok');});
       $('input[type="checkbox"]').on('change', function() {
       $(this).siblings('input[type="checkbox"]').prop('checked', false);
        });
		var Tmn = 3;
		var sc = 0;
		var tm = '';
		var mn = Tmn;
		//Compteur
		function Go(){
			setTimeout(function(){
				sc--;
				if(sc<0){sc=59; mn--;}
		
				tm=((mn<10)?"0":" ") + mn +":";
				tm+=((sc<10)?"0":" ") + sc +"";
				var x = mn/3;
				if(x<=1 && x>=2/3)
					$('#time').css('color', 'green');
				else if(x<=2/3 && x>=1/3)
					$('#time').css('color', 'orange');
				else
					$('#time').css('color', 'red');

				$('#time').val(tm);
				if(mn == 0 && sc == 0)
					{resultatQCM(); }
				Go();
			}, 1000);
		}
	
		Go();
	
		var TabDiv = new Array();
		var i = 0;
		var nQ = $('div').length;
		//Cette partie de code permet de cacher ou apparaitre les boutton de slider next et previews 
		//selon la question, si elle est la 1° question button previews sera cacher, si elle la dernière next sera cacher
		$('#QCM').each(function(index){
			TabDiv[index] = '#'+$(this).attr('id');
			if(index != 0){
				$(this).hide();
			}else
				$(this).children('#previews').hide();
			
			if(index == nQ-1)$(this).children('#next').hide();
		
			
			/*$(this).children('#next').click( function () {
				$(TabDiv[i]).fadeOut();
				i++;
				$(TabDiv[i]).fadeIn();
				alert('ok');
    		});
			$(this).children('#previews').click( function () {
				$(TabDiv[i]).fadeOut();
				i--;
				$(TabDiv[i]).fadeIn();
				if(i==0) $(this).children('#previews').hide();
    		});*/
  		});
		
		//Lorsqu 'on clique sur le button résultat avant que le temps s'achever.
		$('#resultat').click(function(){
			resultatQCM();
			
		});
		
		//cette function permet de récupérer les reponses séléctées et les mettre dans un tableau, puis les envois
		// au reponse.php qui les traite et retourne la réponses et envoi un émail. 
		function resultatQCM(){

			$('#chrono').hide();
			var tab = [];
			$("input:checked[name='check[]']").each(function(){
				tab.push($(this).attr('id'));
			});
			$('div').hide();//Cacher les Questions et Afficher le résultat.
			$('#id').show();
			$('#id2').show();
			$('#id3').show();
			$('#id4').show();
			$('#id5').show();
			$('#id6').show();
			var rps = '';
			for(i=0; i<tab.length; i++)
				rps += tab[i];
				
			/*Récupérer le temps écoulé*/
			if(sc>0){sc = 60 - sc; mn = 3 -(mn+1);}
			else mn = 3 - mn;				
			
			var time = mn + ':' + sc;
			
			$.ajax({
				type:'POST',
				url:'reponse.php?id_quiz=<?php echo $_GET["id_quiz"]; ?>',
				data:'data='+rps+'&time='+time,
				cache:false,
				success: function(result){
					if(result)
						$('#main').html(result);
				}
			});
		}
		
		
		$('#next').click(function(){alert('ok');});
		var curentQuestion = 0;
		//Function de slider
		$('#QCM').anythingSlider({
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				enableStartStop : true,
				buildArrows     : true, //Afficher les butons de nav
				buildNavigation     : false,
				onSlideComplete : function(slider){
					//alert('Welcome to Slide #' + slider.currentPage);
					/*curentQuestion++;
					if(curentQuestion == nbQuestion-1)
						$('#resultat').css('display', 'block');*/
					$('.anythingSlider .back a ').css('display', 'block');
					$('.anythingSlider .forward a').css('display', 'block');
					if(slider.currentPage == 1)
						$('.anythingSlider .back a ').css('display', 'none');
					if(slider.currentPage == nbQuestion){
						$('.anythingSlider .forward a').css('display', 'none');
						$('#resultat').css('display', 'block');
					}
				}
			});
		
	});/*==  End ready  ==*/
	
	function detailler(){
		document.getElementById('detail').style.display = 'none';
		document.getElementById('contenuDetail').style.display = 'block';
	}
</script>


</head>

<body style="padding:0px;">


<!-- Fixed navbar -->
    <div class="navbar navbar-default  navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation" style="margin-bottom: 0px;" id="id">
        <div class="container" style=" width: auto;" id="id2">
            <div class="navbar-header" id="id3">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo" style="font-size: 25px; font-family: 'Playfair Display', serif; " id="id4">
                     <a href="index.php" style="color: black;margin-left: 20px;">
                    Espace Apprenant
                    </a> 
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav" id="id5">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                  <li> <a href="index.php"  style="font-size: 18px;font-family:'Playfair Display', serif; ">Home</a></li> 
                  <li> <a href="module.php"  style="font-size: 18px;font-family:'Playfair Display', serif; ">Mes cours </a></li>
                  <li> <a href="choisir_module.php"  style="font-size: 18px;font-family:'Playfair Display', serif; background-color:#cce6ff;">Passer quiz</a></li>
                  <li><a href="forum.php" id="forum"  style="font-size: 18px;font-family:'Playfair Display', serif; ">Forum</a></li>
                
                </ul>
          
              

                               <div class="navbar-right" id="id6">
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                      
                        <li> <a href="#" style="font-size: 18px;font-family:'Playfair Display', serif;">

                            <?php 

$id_user=$_SESSION['id_user_session'];                           
$image_query="select * from utilisateur where id_user=$id_user";
$res_image=mysqli_query($link,$image_query)or die(mysqli_error($link));
$row_image=mysqli_fetch_assoc($res_image)or die(mysqli_error($link));
$image=$row_image["image"];



                            ?>

                            <img src="images/Profil/<?php echo $image ?>" 
                            style="width: 60px; height: 60px;"> 
                            <?php
                            echo $_SESSION['username_session'];   
                            ?>
                            </a>
                      </li>

                      <li><a href="gerer_profil.php" style="font-size: 18px;font-family:'Playfair Display', serif;">Gérer profil</a></li>

                      <li><a href="logout.php" style="font-size: 18px;font-family:'Playfair Display', serif;"><img src="images/logout-256.png" style="width: 35px; height: 35px;"></a></li>
                    </ul>
                   
                </div> 
            </div>
         
        </div>
    </div>

	
	<h1 style="text-align: center; font-family:'Playfair Display', serif; text-align: center; font-size: 37px;">QCM module  
    <?php 
      $id_module=$_GET["id_module"];
      $q2="select * from module where id_module=$id_module";
      $res=mysqli_query($link,$q2)or die(mysqli_error($link));
      $row=mysqli_fetch_assoc($res);
      $nom_module=$row["nom"];
      echo $nom_module;
    ?>
	</h1>


<h1 style="text-align: center; font-family:'Playfair Display', serif; text-align: center; font-size: 37px;"> 
    <?php 
      $id_module=$_GET["id_module"];
      $id_chapitre=$_GET["id_chapitre"];
      $q_chapitre="select * from chapitre where id_module=$id_module and id_chapitre=$id_chapitre";
      $res_chapitre=mysqli_query($link,$q_chapitre)or die(mysqli_error($link));
      $row_chapitre=mysqli_fetch_assoc($res_chapitre);
      $nom_chapitre=$row_chapitre["nom_chapitre"];
      echo $nom_chapitre;
    ?>
    	
</h1>






	<ul class="header-content" style="margin-top: 150px; margin-right: 50px;font-size: 25px;font-family: arial;">

		<li><a id="resultat" href="javascript:" style="font-size: 25px;font-family:arial, sans-serif; ; ;">Résultat</a></li>			
	</ul>

	<p id="main" style="margin-top:0px; padding:10px; text-align:left;">	
<?php 
	
    
	$id_quiz=$_GET["id_quiz"];
	$qcm="select * from questions where id_quiz=$id_quiz";
	$q_qcm=mysqli_query($link,$qcm)or die(mysqli_error($link));
    $num_rows=mysqli_num_rows($q_qcm);
    if($num_rows==0){
    exit();
    }


    $q_qst="SELECT count(*)  as NB FROM questions where id_quiz=$id_quiz";
	$nbQuestion =mysqli_fetch_array(mysqli_query($link,$q_qst));

   

	echo '<script type="text/javascript"> var nbQuestion = '.$nbQuestion["NB"].';</script>';
	
    

	$q= 0;
	$contenu = '';
	$point = 0;
	$contenu .= '<ul id="QCM" style="text-align:left;width:1200px;font-size:18px;font-family:\'Merriweather Sans\', sans-serif;">';
	while($data = mysqli_fetch_array($q_qcm)){
		$point =  $point + $data['note'];
		$q++;
		$contenu .= '<h2 style="width:1200px;" ><li style="width:1200px;">'.$data['contenue_question'].'  ('.$q.'/'.$nbQuestion['NB'].')   --  '.$data['note'].' Point(s)  --<h2><br>';
		$reponds =  mysqli_query($link,'SELECT * FROM reponses WHERE id_question = ' . $data['id_question']);
		while($dataR = mysqli_fetch_array($reponds)){
			$contenu .= '<input id="'.$dataR['id_reponses'].';" name="check[]" type="checkbox">'.$dataR['reponse'].'<br/><br>';
		}
		$contenu .= '</li>';
	}
	$contenu .= '</ul>';
	echo $contenu;
?>


</p>











<!-- Footer -->
   
    <footer class="footer">
        <strong>E-Learning Université Alger 1 </strong> &copy; Copyright 2018
    </footer>
 

</body>
</html>
<?php } ?>