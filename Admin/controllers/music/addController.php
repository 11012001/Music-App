<?php
	
	class AddBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$description = $_POST["description"];
					$list = $_POST["list"];
					$metaTitle = RemoveString($name);
					$dateTime = date("d/m/Y");
					$catalog = $_POST["catalog"];
					$moi = $_POST["moi"];

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

					$this->Model->execute("insert into song(Anh, tenBH, maCD, maCS, moi, link) values('$image','$name', '$catalog',  '$description',  '$moi', '$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=music/list'>";
					break;
			}

			include "views/music/addView.php";
		}
	}
	new AddBlog();

?>