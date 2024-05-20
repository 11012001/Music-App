<?php
	
	class AddListBH extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$baihat = $_POST["baihat"];
					$malist = isset($_GET["malist"])?$_GET["malist"]:"";
					$metaTitle = RemoveString($name);
					$this->Model->execute("insert into list(maList,maBH) values('$malist', '$baihat')" );
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=playlist/detail&id=$malist'>";
					break;				
				
			}
				
			$data = $this->Model->fetch("select * from listbh where maList='$id'");
			include "views/playlist/addbhView.php";
		}
	}
	new AddListBH();

?>