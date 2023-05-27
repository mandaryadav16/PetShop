<?php
class Payment extends Controller{
	function Checkout(){
		$GetModel= $this->model("tbl_fee");
		$GetFee = $GetModel ->GetFee();
		$this->view("master",["Page"=>"payment","PageName"=>"Payment","GetFee"=>$GetFee]);
	}
	function Info(){
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];
		$note = $_POST["note"];
		$method = $_POST["method"];
		$infocart = $_POST["infocart"];
		$total = $_POST["total"];
		$GetModel= $this->model("tbl_payment");
		$InsertToDb = $GetModel->WriteInfo($name, $phone, $address,$note,$method,$infocart,$total);
		header( "Location: ../home" );
	}
}
?>