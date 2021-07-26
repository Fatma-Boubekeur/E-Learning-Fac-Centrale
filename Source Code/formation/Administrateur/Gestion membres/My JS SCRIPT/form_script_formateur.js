$(document).ready(function(){ 
    
    //apprenant 
    $('#niveau').hide();
    $('#niveau_label').hide();
    
    
     
// lorsque on change de valeur dans la liste (le select )          
    $('select[name="profil"]').change(function(){ 
    	var valeur=$(this).val(); //valeur séléctionnée 
    	if(valeur!=''){ // si non vide
    		if(valeur=='Formateur'){ // si "formateur"
            $('#profession_label').show();// on affiche le champs  
    	    $('#profession').show() ;// on affiche le champs 
            $('#grade_label').show();// on affiche le champs 
            $('#grade').show(); // on affiche le champs
            $('#niveau').hide(); //on cache le champ
            $('#niveau_label').hide(); //on cache le champ
            $('#niveau_message').hide(); 
         
    		}else{

            $('#profession_label').hide(); //on cache le champ   
            $('#profession').hide() ;//on cache le champ
            $('#grade_label').hide(); //on cache le champ
            $('#grade').hide(); //on cache le champ
            $('#message_grade').hide();
            $('#message_profession').hide();

    		}
    		if(valeur=='Apprenant'){ // si  "apprenant"
              $('#niveau_label').show(); //on affiche le champs
              $('#niveau').show(); //on affiche le champs
    		}else{
                $('#niveau').hide(); //on cache le champ
                $('#niveau_label').hide(); //on cache le champ
                $('#niveau_message').hide();
    			 }

       

		}        
    }

    	)  }

		)
