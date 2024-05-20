<?php

	class EditMV extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$metaTitle = RemoveString($name);
					$loaimv = $_POST["loaimv"];
					$casi = $_POST["casi"];
					$quocgia = $_POST["quocgia"];
				//	$content = $_POST["content"];
					$this->Model->execute("update mv set tenMV='$name', maLMV='$loaimv', maCS='$casi', Quocgia='$quocgia' where maMV='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
						$this->Model->execute("update mv set Anh='$image' where maMV='$id'");
					}
					if(strlen($_FILES["mv"]["name"]) != ""){
						$link = "public/mv/".time().$_FILES["mv"]["name"];
						move_uploaded_file($_FILES["mv"]["tmp_name"], "../public/mv/".time().$_FILES["mv"]["name"]);
						$this->Model->execute("update mv set Link='$link' where maMV='$id'");
					}


					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mv/detail&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from mv where maMV='$id'");
					break;
			}

			include "views/mv/editView.php";
		}	
	}
	new EditMV();

?>