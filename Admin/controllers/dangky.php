<?php
	class register extends Controller{

		public function __construct(){

			parent::__construct();
			
			if($_SERVER["REQUEST_METHOD"] == "POST"){
					$username = $_POST["username"];
					$email = $_POST["email"];
					$password1 = $_POST["password1"];
					$password2 = $_POST["password2"];

					if ($password1 != $password2) {
						echo "<script>alert('Nhập mật khẩu sai')</script>";
					}
					else {
						$password = md5($password1);
						$this->Model->execute("insert into users(name,email,password,Quyen) values('$username', '$email','$password','$Quyen')");		
						header("location: index.php");
						
					}
				
			}
			include "views/dangky.php";
		}

	}
	new register();

?>