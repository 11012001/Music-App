<?php
	
	class home extends Controller{
		public function __construct(){
			parent::__construct();
			include "views/home.php";
		}
	}
	new home();

?>