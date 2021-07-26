$(document).ready(function(){
$('input[class="form-control"]').focus(function(){
   $(this).removeAttr('style');  
});


$('select[class="form-control"]').change(function(){
   $(this).removeAttr('style');  
   $('#profil_message').hide(); 
   $('#niveau_message').hide(); 
});


$('#nom').focus(function(){
   $('#nom_message').hide();
});
$('#prenom').focus(function(){
  $('#prenom_message').hide();
});
$('#username').focus(function(){
   $('#available').hide();
});
$('#password').focus(function(){
   $('#mot_passe_message').hide();
});
$('#password_confirm').focus(function(){
   $('#confirmer_mot_passe_message').hide();
});
$('#email').focus(function(){
   $('#email_message').hide();
});
$('#profession').focus(function(){
   $('#message_profession').hide();
});
$('#grade').focus(function(){
  $('#message_grade').hide();
});



$('#btn_valider').click(function(){
valid=true;

var pattern_nom = new RegExp(/^[a-zA-Z ]+$/);
var pattern_prenom = new RegExp(/^[a-zA-Z ]+$/);
var pattern_profession = new RegExp(/^[a-zA-Z ]+$/);
var pattern_grade = new RegExp(/^[a-zA-Z ]+$/);

if(pattern_nom.test($('#nom').val())==false){
   $('#nom_message').html('<span class="text-danger" style="font-size:16px;"> S\'il vous plait entrer un Nom valide ! </span><br>');
   $('#nom_message').show();
   valid=false;
  }

if($('#nom').val()==''){
  $('#nom').css("border-color","#DA1900");
  $('#nom').css("background-color","#F2DEDE");
  $('#nom_message').html('<span class="text-danger" style="font-size:16px;">Veuillez remplir ce  champs svp </span><br>');
   $('#nom_message').show();
  valid=false;
}

if(pattern_prenom.test($('#prenom').val())==false){
   $('#prenom_message').html('<span class="text-danger"  style="font-size:16px;" > S\'il vous plait entrer un Prénom valide ! </span><br>');
   $('#prenom_message').show();
   valid=false;
  }

if($('#prenom').val()==''){
  $('#prenom').css("border-color","#DA1900");
  $('#prenom').css("background-color","#F2DEDE");
  $('#prenom_message').html('<span class="text-danger" style="font-size:16px; ">Veuillez remplir ce  champs svp </span><br>');
  $('#prenom_message').show();
  valid=false;
}

if($('#username').val()==''){
  $('#username').css("border-color","#DA1900");
  $('#username').css("background-color","#F2DEDE");
  $('#available').html('<span class="text-danger" style="font-size:16px;" >Veuillez remplir ce  champs svp </span><br>');
  $('#available').show();
  valid=false;
}

  if($('#password').val() == $('#username').val()){
  $('#mot_passe_message').html('<span class="text-danger" style="font-size:16px;" > Mot de passe ne doit pas être identique à le nom d\'utilisateur </span><br>');
  $('#mot_passe_message').show();
  valid=false;
  }

if($('#password').val()==''){
  $('#password').css("border-color","#DA1900");
  $('#password').css("background-color","#F2DEDE");
  $('#mot_passe_message').html('<span class="text-danger" style="font-size:16px;" >Veuillez remplir ce  champs svp </span><br>');
  $('#mot_passe_message').show();
  valid=false;
}


if($('#password_confirm').val()!= $('#password').val()){
$('#confirmer_mot_passe_message').html('<span class="text-danger" style="font-size:16px;" > Les 2 mots de passe ne sont pas identiques  </span><br>');
$('#confirmer_mot_passe_message').show();
 valid=false;
}

if($('#password_confirm').val()==''){
  $('#password_confirm').css("border-color","#DA1900");
  $('#password_confirm').css("background-color","#F2DEDE");
  $('#confirmer_mot_passe_message').html('<span class="text-danger" style="font-size:16px;" >Veuillez remplir ce  champs svp </span><br>');
  $('#confirmer_mot_passe_message').show();
  valid=false;
}



if($('#email').val()==''){
  $('#email').css("border-color","#DA1900");
  $('#email').css("background-color","#F2DEDE");
  $('#email_message').html('<span class="text-danger" style="font-size:16px; ">Veuillez remplir ce  champs svp </span><br>');
  $('#email_message').show();
  valid=false;
}



if(pattern_profession.test($('#profession').val())==false){
   $('#message_profession').html('<span class="text-danger" style="font-size:16px; "> S\'il vous plait entrer une profession valide ! </span><br>');
   $('#message_profession').show();
   valid=false;
  }

if($("#profil").val()=="Formateur")

{

 if(pattern_grade.test($('#grade').val())==false){
   $('#message_grade').html('<span class="text-danger" style="font-size:16px;"> S\'il vous plait entrer un grade valide ! </span><br>');
   $('#message_grade').show();
   valid=false;
  } 

if($('#grade').val()==''){
  $('#grade').css("border-color","#DA1900");
  $('#grade').css("background-color","#F2DEDE");
  $('#message_grade').html('<span class="text-danger"  style="font-size:16px;" >Veuillez remplir ce  champs svp </span><br>');
  $('#message_grade').show();
  valid=false; }

}



if($("#profil").val()=="Apprenant")

{

 if($('#niveau').val()=='Niveau'){
  $('#niveau_message').html('<span class="text-danger"  style="font-size:16px;" >Veuillez choisir une des options </span><br>');
  $('#niveau_message').show(); 
  $('#niveau').css("border-color","#DA1900");
  $('#niveau').css("background-color","#F2DEDE");
  valid=false;
 }

}

return valid && alert(" Inscription réussie ! ");





});







});
