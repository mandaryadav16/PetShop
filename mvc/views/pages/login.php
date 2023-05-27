<!-- <script type="text/javascript">
	if("<?php echo $_SESSION["email"]; ?>"){
		window.location.assign("../");
	}
</script> -->
<div class="container">
	<div id="box--content__pc" class=" p-2" style="width: 100%;">
		<div class="p-3 pt-4" style="width: 30%;height: 340px;margin: auto;margin-top: 100px">
			<div class="p-3 bg" style="width: 100%;border-radius: 20px;">
				<p class="text-center font-weight-bold mb-2 text-white" style="font-size: 120%">Login Admin</p>
				<label class="font-weight-bold text-white">Email</label>
				<input class="form-control" type="email" id="email" placeholder="admin@gmail.com">
				<label class="font-weight-bold mt-2 text-white">Password</label>
				<input class="form-control" type="password" id="password" placeholder="123456">
				<p id="status--login" class="text-danger text-center mb-0 mt-3" style="font-size: 90%;display: none;"></p>
				<div class="text-center pt-3">
					<button id="loginButtonSubmit" class="btn bg-white">Login</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#loginButtonSubmit").click(function() {  
		var email = $("#email").val();
		var password = $("#password").val();
		$.post("../login/CheckLogin",{email:email,password:password},function(data){
			if(data == 1){
				$("#status--login").show();
				$("#status--login").text("Email or password is wrong");
			}else{
				window.location.assign("../product/productManage");
			}
			
		})
	});
</script>