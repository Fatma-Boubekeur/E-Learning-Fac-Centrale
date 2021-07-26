<?php
	session_start();
if((!isset($_SESSION['id_user_session'])) && (!isset($_SESSION['username_session'])))
{
	header("Location: ..\index.php");
}else 
{

if($_SESSION['newTry'] == 1){
	$_SESSION['newTry'] = 0;
	header('Content-Type: text/html; charset=ISO-8859-1');
	$rps = $_POST['data'];
	$time = $_POST['time'];
	$TabRps = explode(';', $rps);

	$id_quiz=$_GET["id_quiz"];


	$link=mysqli_connect("localhost", "root", "") or die ("<p id='Erreur'>connection impossible au serveur</p>");
	mysqli_select_db($link,"formation") or die("<p id='Erreur'> Base de Données inconnue </p>");
	$dataQuestion =mysqli_fetch_array(mysqli_query($link,"SELECT count(*) as NB, SUM(Note) as Sum FROM questions where id_quiz=$id_quiz"));
	//$rps = mysql_fetch_array(mysql_query('SELECT * FROM Reponse'));
		
	$Qcm = mysqli_query($link,"SELECT * FROM questions where id_quiz=$id_quiz");
	$q= 0;
	$note = 0;
	$cR = 0;
	$fR = 0;
	$nbQ = $dataQuestion['NB'];
	$contenu = '';
	while($data = mysqli_fetch_array($Qcm)){
		$q++;
		$contenu .= '<h3 style="text-align:left;"> - '.$data['contenue_question'].'  ('.$q.'/'.$nbQ.')</h3>';

		$reponds =  mysqli_query($link,'SELECT * FROM reponses WHERE id_question = ' . $data['id_question']);
	
		$contenu .='<ul>';
		$noR = 0;
		$bonR = '';
		while($dataR = mysqli_fetch_array($reponds)){
			$test = 0;
			for($i=0; $i<count($TabRps)-1; $i++){
				if($TabRps[$i] == $dataR['id_reponses'])
					{$test =1; $noR = 1;}
			}
			if($test==1 && $dataR['correct']==1){
				$contenu .= '<li style="text-align:left; color:#090; font-weight: bold">'.$dataR['reponse'].'</li>'; 
				$note = $note + $data['note']; $cR++;
			}
			elseif($test==1 && $dataR['correct']==0)
				{$contenu .= '<li style="text-align:left; color:#F00; font-weight: bold">'.$dataR['reponse'].'</li>'; $noR = 0; $fR++;}
			else
				{$contenu .= '<li style="text-align:left; color:#111">'.$dataR['reponse'].'</li>';}
			
			if($dataR['correct']==1)$bonR=$dataR['reponse'];
		}
		if($noR == 0)$contenu .= '<span style="padding-left:10px; font-weight:bold; position:relative"> * Mauvaise réponse la bonne était : <b style="padding-left:15px; color:green; font-weight:bolder; ">'.$bonR.'</b></span> ';
		$contenu .='</ul>';
	}
	
	$resultat= $note.'/'.$dataQuestion['Sum'];
  
   
    $now=date("Y-m-d H:i:s");
    
	
	

	$rst = '<fieldset id="result" style="font-size:30px;font-family:\'Merriweather Sans\', sans-serif;margin-bottom:50px; "><legend style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; "> Résultat du QCM :</legend><h2>Résultat du QCM : </h2>
	<ul style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; ">
		<li style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; ">Bonne réponse : <b>'.$cR.'/'.$nbQ.'('.round(($cR/$nbQ)*100, 1).'%)</b></li><br>
		<li style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; ">Mauvaise réponse : <b>'.$fR.'/'.$nbQ.'('.round(($fR/$nbQ)*100, 1).'%)</b></li><br>
		<li style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; ">Pas réponse : <b>'.($nbQ -($fR+$cR)).'/'.$nbQ.'('.round((($nbQ -($fR+$cR))*100)/$nbQ, 1).'%)</b></li><br>
		<li style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; ">Temps écoulé : <b>'.$time.'</b></li><br>
	</ul>
	<p style="font-size:24px;font-family:\'Merriweather Sans\', sans-serif; "> Note =' . $resultat.'</p>';
	echo $rst .'<br/><a href="javascript:detailler()" id="detail" style="font-size:30px;font-family:\'Merriweather Sans\', sans-serif; margin-bottom:50px" class="col-lg-4">Afficher les réponses>> </a><br/>';
	
	
	
	
	//Détailles
	echo '<fieldset id="contenuDetail" style="font-size:18px;font-family:\'Merriweather Sans\', sans-serif; "><legend> Détaille du QCM :</legend>'.$contenu.'</fieldset> ';

        
}
}
?>
