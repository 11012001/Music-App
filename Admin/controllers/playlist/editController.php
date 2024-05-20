<?php

	class EditList extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$album = $_POST["album"];
					$metaTitle = RemoveString($name);
					
					$this->Model->execute("update listbh set tenList='$name',maAB='$album' where maList='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/playlist/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/playlist/".time().$_FILES["image"]["name"]);
						$this->Model->execute("update listbh set Anh='$image' where maList='$id'");
					}
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=playlist/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from listbh where maList='$id'");
					break;
			}

			include "views/playlist/editView.php";
		}	
	}
	new EditList();

?>