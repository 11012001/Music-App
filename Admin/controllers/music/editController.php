<?php

	class EditBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$name = $_POST["name"];
					$metaTitle = RemoveString($name);
					$catalog = $_POST["catalog"];
					$casi = $_POST["casi"];
					$moi = $_POST["moi"];
					$list = $_POST["list"];
					if($moi=="Có")
					{
						$moi=1;
					}
					else{
						$moi=0;
					}
					$this->Model->execute("update song set tenBH='$name', maCD='$catalog', maCS=$casi,maList='$list', moi='$moi' where maBH='$id' ");

					if(strlen($_FILES["image"]["name"]) != ""){
						$image = "public/images/Bài hát-MV/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/Bài hát-MV/".time().$_FILES["image"]["name"]);
						$this->Model->execute("update song set Anh='$image' where maBH='$id'");
					}
					if(strlen($_FILES["song"]["name"]) != ""){
						$link = "public/music/".time().$_FILES["song"]["name"];
						move_uploaded_file($_FILES["song"]["tmp_name"], "../public/music/".time().$_FILES["song"]["name"]);
						$this->Model->execute("update song set link='$link' where maBH='$id'");
					}


					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=music/detail&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from song where maBH='$id'");
					break;
			}

			include "views/music/editView.php";
		}	
	}
	new EditBlog();

?>