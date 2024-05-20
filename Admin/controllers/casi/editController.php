<?php

	class EditCS extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$metaTitle = RemoveString($name);
					$quocgia = $_POST["quocgia"];
					$gioithieu = $_POST["gioithieu"];
					
					$this->Model->execute("update nghesi set tenCS='$name', Quocgia='$quocgia', Gioithieu='$gioithieu' where maCS='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/Ca sĩ/".$_FILES["image"]["name"];
						$this->Model->execute("update nghesi set Anh='$image' where maCS='$id'");
					}


					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=casi/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from nghesi where maCS='$id'");
					break;
			}

			include "views/casi/editView.php";
		}	
	}
	new EditCS();

?>