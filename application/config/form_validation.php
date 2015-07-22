<?php 

$config = array(
	/*
	  Login - Index-Login
	*/
	 
	'login/index'
		=>array(
			array('field'=>'correo',	'label'=>'correo', 
				 	'rules'=>'trim|xss_clean|v_email|valid_email'),
			array('field'=>'pass',		'label'=>'contraseña',
				  	'rules'=>'trim|xss_clean|v_pass')			
		),		
	/*
	Formulario - Tipo nivel academico
	*/	
	'formularios/f_tna'
		=>array(
			array('field'=>'i_nom_tna',	'label'=>'nombre', 
				 	'rules'=>'trim|xss_clean|required|v_texto')		
		)
);