<?php 
$link=mysqli_connect("localhost","root","");
mysqli_set_charset($link, 'utf8');

mysqli_select_db($link,"formation") or die(mysqli_error($link));


function escape_dangerous_data($data){

	if(function_exists('mysqli_real_escape_string')){
     global $link;
     $data =mysqli_real_escape_string($link,trim($data));
     $data=strip_tags($data);

	}else{

       $data=mysqli_escape_string(trim($data))	;
       $data=strip_tags($data);

	}

	return $data;
}


?>