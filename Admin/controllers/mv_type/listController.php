<?php

	class ListCatalogBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["topic"];
					$quocgia = $_POST["quocgia"];
					$metaTitle = RemoveString($name);
					$this->Model->execute("insert into loaimv(tenLMV,Quocgia) values('$name','$quocgia')");
					// header("location: index.php?controller=catalog_blog/list");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mv_type/list'>";
					break;

				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from loaimv where maLMV=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mv_type/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from loaimv order by Quocgia asc");

			include "views/mv_type/listView.php";
		}
	}
	new ListCatalogBlog();

?>