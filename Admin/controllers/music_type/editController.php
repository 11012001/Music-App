<?php

	class EditCatalogBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$name = $_POST["topic"];
					$loaicd = $_POST["loaicd"];
					$oldname = $_POST["oldname"];
					$metaTitle = RemoveString($name);
					if($name=="")
					{
						$name=$oldname;
					}
					$this->Model->execute("update chude set tenCD='$name',loaiCD='$loaicd' where maCD=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=music_type/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from chude where maCD=$id");
					break;
			}


			include "views/music_type/editView.php";
		}
	}
	new EditCatalogBlog();
	
?>