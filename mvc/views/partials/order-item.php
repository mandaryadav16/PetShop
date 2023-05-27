

<?php
while($row = mysqli_fetch_array($data["GetPayment"])){
	$method ;
	if($row["method"] == 1){
		$method = "Bank";
	}elseif($row["method"] == 2){
		$method = "Cast";
	}
	echo '<div class="col-12 p-2"><div class=" bg-white p-3 shadow1 " style="display:flex">
	<div style="width: 50%">
	<p>Name: '.$row["name"].'</p>
	<p>Phone: '.$row["phone"].'</p>
	<p>Address: '.$row["address"].'</p>
	<p>Method: '.$method.'</p>
	<p class="font-weight-bold" style="font-size:140%">Total: '.$row["total"].'₹</p>
	</div>
	<div style="width: 50%">
	'.$row["infocart"].'
	</div>
	</div></div>';


}
?>