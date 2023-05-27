<?php
class Product extends Controller{
	function productManage(){
		if(isset($_SESSION["email"])){
			$GetModel= $this->model("tbl_post");
			$GetPost = $GetModel ->GetPost();
			$this->view("master",["Page"=>"product","PageName"=>"product","Post"=>$GetPost]);
		}else{
			header("Location: ../login/admin");
		}
	}
	function deleteProduct(){
		$idDelete = $_POST["id"];
		$GetModel= $this->model("tbl_post");
		$GetPost = $GetModel ->DeleteProduct($idDelete);
		header("Location: ../product/productManage");
	}	
}
?>