<?php
	
	class AddCS extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$gioithieu = $_POST["gioithieu"];
					$metaTitle = RemoveString($name);
					$quocgia = $_POST["quocgia"];
					
					if($_FILES["image"]["name"]){
						$image = "public/images/Ca sĩ/".time().$_FILES["image"]["name"];
						move_uploaded_file($_FILES["image"]["tmp_name"], "../public/images/Ca sĩ/".time().$_FILES["image"]["name"]);
					}

					$this->Model->execute("insert into nghesi (Anh, tenCS, Quocgia, Gioithieu) values('$image','$name', '$quocgia','$gioithieu')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=casi/list'>";
					break;
			}

			include "views/casi/addView.php";
		}
	}
	new AddCS();

?>