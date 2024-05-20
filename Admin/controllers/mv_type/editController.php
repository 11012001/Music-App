<?php

	class EditCatalogBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'edit':
					$name = $_POST["topic"];
					$quocgia = $_POST["quocgia"];
					$oldname = $_POST["oldname"];
					$metaTitle = RemoveString($name);
					if($name=="")
					{
						$name=$oldname;
					}
					$this->Model->execute("update loaimv set tenLMV='$name',Quocgia='$quocgia' where maLMV=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mv_type/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from loaimv where maLMV=$id");
					break;
			}


			include "views/mv_type/editView.php";
		}
	}
	new EditCatalogBlog();
	
?>