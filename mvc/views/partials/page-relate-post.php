<?php
while($row = mysqli_fetch_array($data["Relate"])){
    $type ;
    if($row["type"] == 1){
        $type = "Little Pug";
    }elseif($row["type"] == 2){
        $type = "Big Pug";
    }
    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
    <div class="post--box p-3 bg-white shadow1" style="width: 100%;height: 310px;border-radius: 10px">
    <a href="../page/'.$row["id"].'" style="text-decoration:none;color:black">
    <div class="prinfImage'.$row["id"].'" style="width: 100%;height: 170px;background-image: url(../public/images/background/'.$row["background"].'.jpg);background-size: 100% 100%;background-repeat: no-repeat;border-radius: 10px;">
    </div>
    </a>
    <p class="font-weight-bold mt-3 mb-0" style="font-size: 110%">'.$row["title"].'</p>
    <p class="font-weight-bold mb-2" style="font-size: 90%;opacity: 0.7">'.$type.'</p>
    <p class="font-weight-bold float-left" style="font-size: 130%">₹'.$row["price"].'</p>
    <div onclick="addToCart('.$row["id"].',`'.$row["title"].'`,`'.$row["image"].'`,'.$row["price"].')" class="float-right text-center bg" style="width: 40px;height: 40px;border-radius: 5px"><i class="fa fa-shopping-basket text-white" aria-hidden="true" style="font-size: 140%;line-height: 38px"></i></div>
    <div style="clear: both;"></div>
    </div>
    </div><script type="text/javascript">
    $(document).ready(function(){
        var imageLink = "'.$row["image"].'";
        var imageLinkcut = imageLink.split(",",1);
        for (a in imageLinkcut) {
            var prinfImage = `<img src="../../public/images/product/`+imageLinkcut[a]+`"  width="100%" height="100%" style="object-fit: contain;margin-top: 15px;">`
            var x = document.getElementsByClassName("prinfImage'.$row["id"].'");
            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = prinfImage;
            }
        }
        });
        </script>';
    }
    ?>

    <script type="text/javascript">
        function addToCart(id,name,image,price){
            var cart =JSON.parse(localStorage.getItem('cart'));
            console.log(id,name,image,price);
            var checkCart=0;
            var quanlity = 1;
            if(cart.length > 0){
                for(let i = 0; i < cart.length; i++) {
                    if (id == cart[i].id) {
                        cart[i].quanlity++;
                        localStorage.setItem("cart", JSON.stringify(cart));
                        cartPrinf();
                        checkCart=1;
                        break;
                    }else {
                        checkCart=0;
                    }
                }
            }else {
                checkCart=0;
            }
            if(checkCart == 0){
                var addToCart = {id,name,image,price,quanlity};
                cart.push(addToCart);
                localStorage.setItem("cart", JSON.stringify(cart));
                cartPrinf();
            }
        }
    </script>
