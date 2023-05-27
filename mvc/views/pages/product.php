
<div id="body--box__pc" style="height: 100vh;width: 100%;margin: auto;padding-top: 90px">
	<div class="float-left" style="width: 100%;height: 100vh;">
		<div class="container-fluid p-0" style="height: calc(100vh - 100px);display: flex;">
			<?php include("./mvc/views/partials/admin-menu.php"); ?>  
			<div class="p-2" style="width: calc(100% - 220px);height: 100%;">
				<div class="m-0 pl-2 pt-2" style="width: 100%">
					<p class="font-weight-bold mb-1 float-left" style="font-size: 150%">Product Manage</p>	
					<a href="../AddProduct/Add">
						<div class="btn bg text-white float-right mr-4">Add product</div>
					</a>	
					<div style="clear: both;"></div>
				</div>

				<div class="row m-0 p-2 mt-3">
					<?php include("./mvc/views/partials/admin-product.php"); ?>  
				</div>
			</div>
		</div>	



	</div>
</div>


