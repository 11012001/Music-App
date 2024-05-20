<?php
	
	class AddSongtl extends Controller{
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
					if($_FILES["song"]["name"]){
						$link = "public/music/".time().$_FILES["song"]["name"];
						move_uploaded_file($_FILES["song"]["tmp_name"], "../public/music/".time().$_FILES["song"]["name"]);
					}
					if($moi=="Có")
					{
						$moi=1;
					}
					else{
						$moi=0;
					}

					$this->Model->execute("insert into songtl(AnhBH, tenBH, id, Link) values('$image','$name','$id', '$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=songtl/list'>";
					break;
			}

			include "views/songtl/addView.php";
		}
	}
	new AddSongtl();

?>