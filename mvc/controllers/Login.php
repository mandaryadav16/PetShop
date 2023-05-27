<?php
class Login extends Controller{
	function Admin(){
		if(isset($_SESSION["email"])){
			header("Location: ../product/productManage");
		}else{
			$this->view("master",["Page"=>"login","PageName"=>"Login"]);
		}
	}
	function CheckLogin(){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$passwordHash = md5($password);
		$GetModel= $this->model("tbl_admin");
		$CheckLogin = $GetModel ->CheckLogin($email,$passwordHash);
		if($CheckLogin == 2){
			$_SESSION["email"]=$email;
			echo 2;
		}else{
			echo 1;
		}	
	}

	function Logout(){
		if(isset($_SESSION["email"])){
			unset ($_SESSION["email"]);
			header("Location: ../");
		}
	}
}
?>