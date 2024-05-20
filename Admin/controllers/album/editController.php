<?php

	class EditAB extends Controller{
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
					$this->Model->execute("update album set tenAB='$name',Quocgia='$quocgia' where maAB='$id'");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=album/list'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from album where maAB='$id'");
					break;
			}


			include "views/album/editView.php";
		}
	}
	new EditAB();
	
?>