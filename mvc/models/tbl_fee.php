<?php
class tbl_fee extends DB{
	public function GetFee(){
		$qr = "SELECT * FROM tbl_fee";
		return mysqli_query($this->con, $qr);
	}
}
?>