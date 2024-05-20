<?php

	class Search extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'search':
				$search = $_POST["search"];
				$number = $this->Model->count("select * from nghesi where tenCS like '%$search%'" );
				$num_page = 10;
				$page_show = ceil($number/$num_page);
				$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

				$form = ($page-1)*$num_page;
			
				$data=$this->Model->fetch("select * from nghesi where tenCS like '%$search%' order by maCS asc limit $form,$num_page");
			}

			include "views/casi/searchView.php";
		}	
	}
	new Search();

?>