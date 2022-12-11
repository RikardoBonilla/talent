<?php
	/**
     * 
     * The purpose of this class is to instantiate the main class 
	 * where it is validated if the regular expression is valid, 
	 * in addition to this it sends the general header and the body 
	 * for the login
     * 
     */
	

	class mainController extends Main{

		function index(){
			require_once('views/means/header.php');
			require_once('views/login/index.php');
		}  
		
	}

