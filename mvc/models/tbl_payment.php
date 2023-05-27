<?php
class tbl_payment extends DB{
	public function WriteInfo($name, $phone, $address,$note,$method,$infocart,$total){
		$qr = "INSERT INTO tbl_payment (name, phone, address,note,method,infocart,total,active)
		VALUES ('$name', '$phone', '$address','$note','$method','$infocart','$total',1)";
		return mysqli_query($this->con, $qr);
	}
	public function GetPayment(){
		$qr = "SELECT * FROM tbl_payment ORDER BY id DESC";
		return mysqli_query($this->con, $qr);
	}
}
?>