<?php

	class login extends Controller{

		public function __construct(){

			parent::__construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){

				$email = $_POST["email"];
				$password = $_POST["password"];

				$check = $this->Model->fetchOne("select * from users where email='$email'");
				if( isset($check["email"]) ) {
					if( md5($password) == $check["password"] &&$check["Quyen"]!=0){
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["name"];
						$_SESSION["Quyen"] = $check["Quyen"];
						$_SESSION["id"] = $check["id"];
						header("location: index.php");
					}
					else if( md5($password) == $check["password"] &&$check["Quyen"]==0){
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["name"];
						$_SESSION["Quyen"] = $check["Quyen"];
						$_SESSION["id"] = $check["id"];
						header("location: /Hoavu/index.php");
					}
				}
			}
			include "views/login.php";
		}

	}
	new login();

?>