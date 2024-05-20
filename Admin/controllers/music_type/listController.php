<?php

	class ListTypeMusic extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["topic"];
					$loaicd = $_POST["loaicd"];
					$metaTitle = RemoveString($name);
					$this->Model->execute("insert into chude(tenCD,loaiCD) values('$name','$loaicd')");
					// header("location: index.php?controller=catalog_blog/list");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=music_type/list'>";
					break;

				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from chude where maCD=$id");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=music_type/list'>";
					break;
			}

			$data = $this->Model->fetch("select * from chude order by loaiCD asc");

			include "views/music_type/listView.php";
		}
	}
	new ListTypeMusic();

?>