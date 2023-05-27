<style type="text/css">
	.product-small-img img{
		height: 92px;
		width: 70px;
		margin: 10px 0;
		cursor: pointer;
		display: block;
		opacity: 0.6;
	}
	.product-small-img img:hover{
		opacity: 1;

	}
	::-webkit-scrollbar {
		width: 0;
		height: 0;
	}
</style>
<div class="col-12 col-md-6 col-lg-4 p-0" style="height: 400px">
	<div class="product">
		<div id="imageMini" class="product-small-img float-left" style="overflow-y: auto;height: 400px">	
		</div>
		<div id="imageContainer" class="img-container" style="float: right;padding: 10px;width: calc(100% - 70px);">
			
		</div>
		<div style="clear: both;"></div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var imageLink = "<?php echo $row['image']; ?>";	
			var imageLinkActive = imageLink.split(",",1);
			document.getElementById("imageContainer").innerHTML = `<img id="imageBox" src="../../public/images/product/`+imageLinkActive+`" width="100%" style="object-fit: contain;height: 400px;">`;

			var imageLinkcut = imageLink.split(",");
			var prinfDetailImage ="";
			for(let i = 0; i < imageLinkcut.length - 1; i++) {
				prinfDetailImage += `<img src="../../public/images/product/`+imageLinkcut[i]+`" onclick="ImageChoose('`+imageLinkcut[i]+`')"style="object-fit: contain;">`
			}
			console.log(prinfDetailImage);
			console.log(imageLinkcut);
			document.getElementById("imageMini").innerHTML +=prinfDetailImage;  
		});

		function ImageChoose(smallImg){
			var fullImg=document.getElementById("imageBox");
			fullImg.src="../../public/images/product/"+smallImg;
			console.log(smallImg);

		}
	</script>
</div>