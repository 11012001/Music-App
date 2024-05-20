<?php 

	class editUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;

			switch ($act) {
				case 'edit':					
					$name = $_POST["username"];
					$password = $_POST["password"];
					$Quyen = $_POST["Quyen"];
					
					$this->Model->execute("update users set name='$name',Quyen='$Quyen' where id='$id' ");

					if($password != ''){
						$pass = md5($password);
						$this->Model->execute("update users set password='$pass' where id='$id' ");
					}
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=users/list'>";

					break;
				
				default:
					$value = $this->Model->fetchOne("select * from users where id='$id'");
					break;
			}

			include "views/users/editView.php";
		}
	}
	new editUsers();

 ?>