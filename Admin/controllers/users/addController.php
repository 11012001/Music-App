<?php 

	class addUsers extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					
					$username = $_POST["username"];
					$email = $_POST["email"];
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];
					$Quyen = $_POST["Quyen"];

					if ($password1 != $password2) {
						echo "<div class='alert alert-danger'>
							Mật khẩu không hợp lệ
							</div>";
					}
					else {
						$password = md5($password1);

						$this->Model->execute("insert into users(name,email,password,Quyen) values('$username', '$email','$password','$Quyen')");
						echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=users/list'>";

					}

					break;
			}

			include "views/users/addView.php";
		}
	}
	new addUsers();

 ?>