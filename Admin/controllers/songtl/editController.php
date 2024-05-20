<?php

	class EditBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$moi = $_POST["moi"];
					$iduser = $_POST["iduser"];
					
					$this->Model->execute("update songtl set tenBH='$name',id='$iduser' where maBH='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
						$this->Model->execute("update songtl set AnhBH='$image' where maBH='$id'");
					}
					if(strlen($_FILES["song"]["name"]) != ""){
						$link = "public/music/".time().$_FILES["song"]["name"];
						move_uploaded_file($_FILES["song"]["tmp_name"], "../public/music/".time().$_FILES["song"]["name"]);
						$this->Model->execute("update songtl set Link='$link' where maBH='$id'");
					}


					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=songtl/detail&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from songtl where maBH='$id'");
					break;
			}

			include "views/songtl/editView.php";
		}	
	}
	new EditBlog();

?>