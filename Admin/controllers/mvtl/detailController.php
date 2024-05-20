<?php

	class DetailMV extends Controller{
		public function __construct(){
			parent::__construct();

			$id = isset($_GET["id"])?$_GET["id"]:"";
			$value = $this->Model->fetchOne("select * from mvtl where maMV='$id'");

			include "views/mvtl/detailView.php";
		}
	}
	new DetailMV();

?>