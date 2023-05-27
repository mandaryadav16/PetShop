<?php
class tbl_admin extends DB{
	public function CheckLogin($email,$passwordHash){
		$qr = "SELECT * FROM tbl_admin WHERE tbl_admin.email='$email' AND tbl_admin.password='$passwordHash'";
		$rows = mysqli_query($this->con, $qr);
		$kq=1;
		if(mysqli_num_rows($rows)>0){
			$kq=2;
		}
		return $kq;
	}
}
?>