<?php
while($row = mysqli_fetch_array($data["Post"])){
    $type ;
    if($row["type"] == 1){
        $type = "Little Pug";
    }elseif($row["type"] == 2){
        $type = "Big Pug";
    }
    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
    <div class="post--box p-3 bg-white shadow1" style="width: 100%;height: 310px;border-radius: 10px">
    <a href="../detail/page/'.$row["id"].'" style="text-decoration:none;color:black">
    <div class="prinfImage'.$row["id"].'" style="width: 100%;height: 170px;background-image: url(../public/images/background/'.$row["background"].'.jpg);background-size: 100% 100%;background-repeat: no-repeat;border-radius: 10px;">
    </div>
    </a>
    <p class="font-weight-bold mt-3 mb-0" style="font-size: 110%">'.$row["title"].'</p>
    <p class="font-weight-bold mb-2" style="font-size: 90%;opacity: 0.7">'.$type.'</p>
    <p class="font-weight-bold float-left" style="font-size: 130%">₹'.$row["price"].'</p>
    <form action="../product/deleteProduct" method="post">
    <button type="submit" class="btn btn-warning float-right text-center ml-1">
    <i class="fa fa-trash text-white" aria-hidden="true"></i>
    <input value="'.$row["id"].'" name="id" style="display:none">
    </button>
    </form>
    <div class="btn btn-danger float-right text-center">
    <i class="fa fa-pencil " aria-hidden="true"></i>
    </div>

    <div style="clear: both;"></div>
    </div>
    
    </div><script type="text/javascript">
    $(document).ready(function(){
        var imageLink = "'.$row["image"].'";
        var imageLinkcut = imageLink.split(",",1);
        for (a in imageLinkcut) {
            var prinfImage = `<img src="../public/images/product/`+imageLinkcut[a]+`"  width="100%" height="100%" style="object-fit: contain;margin-top: 15px;">`
            var x = document.getElementsByClassName("prinfImage'.$row["id"].'");
            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = prinfImage;
            }
        }
        });
        </script>';


    }
    ?>
