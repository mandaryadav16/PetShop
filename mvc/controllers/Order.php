<?php
class Order extends Controller{
	function OrderManage(){
		if(isset($_SESSION["email"])){
			$GetModel= $this->model("tbl_payment");
			$GetPayment = $GetModel ->GetPayment();
			$this->view("master",["Page"=>"order-manage","PageName"=>"Order Manage","GetPayment"=>$GetPayment]);
		}else{
			header("Location: ../login/admin");
		}
	}	
}
?>