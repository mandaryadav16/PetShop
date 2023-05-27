<div id="card--box" class="bg-white pl-3 pt-2 pr-3" style="width: 300px;height: calc(100vh - 200px);position: absolute;margin-left: calc(100% - 323px);margin-top: 70px;border-radius: 10px;z-index: 999;display: none;">
    <p class="font-weight-bold float-left" style="font-size: 130%">My Cart</p>
    <p id="totalPrinf" class="font-weight-bold float-right mt-1 cl">500₹</p>
    <div style="clear: both;"></div>
    <div id="cartPrinf" style="overflow-y: auto;height: calc(100vh - 310px)">
    </div>
    <a href="/shoppet/payment/checkout">
        <div class="btn bg font-weight-bold text-white">Checkout</div>
    </a>
</div>

<script type="text/javascript">
    $( document ).ready(function() {
        $("#cart--button__pc").on('click',function(){
            $("#card--box").fadeToggle();
        })
    });
    $( document ).ready(function() {
        $("#cart--button__mobile").on('click',function(){
            $("#card--box").fadeToggle();
        })
    });

    


    var cart =JSON.parse(localStorage.getItem('cart'));
    if (cart === null) {
        cart = [];
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    var countOrder =JSON.parse(localStorage.getItem('countOrder'));
    if (countOrder === null) {
        countOrder = 0;
        localStorage.setItem("countOrder", JSON.stringify(countOrder));
    }

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


    cartPrinf();
    function cartPrinf(){
     $( document ).ready(function() {
        var countOrder =0;
        document.getElementById("cartPrinf").innerHTML ='';
        var cart =JSON.parse(localStorage.getItem('cart'));
        var totalPrinf = 0;
        for(let i = 0; i < cart.length; i++) {
            var prinfImage;
            var imageLink = cart[i].image;
            var imageLinkcut = imageLink.split(",",1);
            countOrder++;
            var cartPrinf = `<div class="mb-2" style="width: 100%;height: 80px;display: flex;">
            <div style="width: 80px;height: 80px;">
            <div onclick=deleteCart(`+cart[i].id+`) class="bg text-center" style="width:25px;height:25px;border-radius:50%;position:absolute">
            <p><i class="fa fa-times text-white" aria-hidden="true" style="line-height:23px"></i></p>
            </div>
            <img src="/shoppet/public/images/product/`+imageLinkcut+`" width="100%" height="100%" style="object-fit: contain">
            </div>
            <div class="pl-1" style="width: calc(100% - 80px);height: 80px;">
            <p class="font-weight-bold mb-0">Germanian Little Pug</p>
            <p class="mb-1" style="font-size: 75%;margin-top: -2px">Little Dogs</p>
            <div style="width: 100%;height: 30px;">
            <div onclick=dowQuanlity(`+cart[i].id+`) class="float-left bg text-center text-white font-weight-bold" style="width: 30px;height: 30px;border-radius: 8px">-</div>
            <div class="float-left text-center font-weight-bold" style="width: 30px;height: 30px;border-radius: 8px">`+cart[i].quanlity+`</div>
            <div onclick=upQuanlity(`+cart[i].id+`) class="float-left bg text-center text-white font-weight-bold" style="width: 30px;height: 30px;border-radius: 8px">+</div>
            <div class="float-right font-weight-bold">`+cart[i].price*cart[i].quanlity+`₹</div>
            </div>
            </div>
            </div>`
            totalPrinf +=cart[i].price*cart[i].quanlity; 

            document.getElementById("cartPrinf").innerHTML +=cartPrinf;  
        }
        $('#totalPrinf').text("Total: "+totalPrinf+"₹");
        localStorage.setItem("countOrder", JSON.stringify(countOrder));
        document.getElementById("countOrder").innerHTML =countOrder;
    });
 }


 function upQuanlity(id){
    var cart =JSON.parse(localStorage.getItem('cart'));
    for(let i = 0; i < cart.length; i++) {
        if (id == cart[i].id) {
            cart[i].quanlity++;
            localStorage.setItem("cart", JSON.stringify(cart));
            cartPrinf();
            break;
        }
    }
}

function dowQuanlity(id){
    var cart =JSON.parse(localStorage.getItem('cart'));
    for(let i = 0; i < cart.length; i++) {
        if (id == cart[i].id ) {
            if(cart[i].quanlity>1){
                cart[i].quanlity--;
                localStorage.setItem("cart", JSON.stringify(cart));
                cartPrinf();
                break;
            }
            
        }
    }
}


function deleteCart(id){
    var cart =JSON.parse(localStorage.getItem('cart'));
    for(let i = 0; i < cart.length; i++) {
        if (id == cart[i].id) {
            cart.splice(i, 1);
            localStorage.setItem("cart", JSON.stringify(cart)); 
            cartPrinf();        
            break;
        }
    }       
}
</script>