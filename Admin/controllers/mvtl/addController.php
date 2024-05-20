<?php
	
	class AddMV extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$id = $_POST["id"];
										
					if($_FILES["image"]["name"]){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
					}
					if($_FILES["mv"]["name"]){
						$link = "public/mv/".time().$_FILES["mv"]["name"];
						move_uploaded_file($_FILES["mv"]["tmp_name"], "../public/mv/".time().$_FILES["mv"]["name"]);
					}

					$this->Model->execute("insert into mvtl(AnhMV, tenMV,id, Link) values('$image','$name','$id','$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mvtl/list'>";
					break;
			}

			include "views/mvtl/addView.php";
		}
	}
	new AddMV();

?>