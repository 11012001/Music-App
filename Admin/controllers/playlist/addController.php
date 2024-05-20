<?php
	
	class AddList extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$album = $_POST["album"];
					$metaTitle = RemoveString($name);
				
					if($_FILES["image"]["name"]){
						$image = "public/images/playlist/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/playlist/".time().$_FILES["image"]["name"]);
					}

					$this->Model->execute("insert into listbh (Anh, tenList,maAB) values('$image','$name','$album')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=playlist/list'>";
					break;
			}

			include "views/playlist/addView.php";
		}
	}
	new AddList();

?>