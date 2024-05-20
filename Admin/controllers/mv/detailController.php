<?php

	class DetailMV extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			$value = $this->Model->fetchOne("select * from mv where maMV='$id'");

			include "views/mv/detailView.php";
		}
	}
	new DetailMV();

?>