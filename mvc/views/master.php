<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data["PageName"]; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    
</head>
<style type="text/css">
    .bg{
        background: #ff7c30
    }
    .cl{
        color: #ff7c30;
    }
    .btl{
        border-top-left-radius: 7px;
    }
    .btr{
        border-top-right-radius: 7px;
    }
    .bbl{
        border-bottom-left-radius: 7px;
    }
    .bbr{
        border-bottom-right-radius: 7px;
    }
    .shadow1{
        -webkit-box-shadow: 0px 2px 27px -9px rgba(0,0,0,0.07);
        -moz-box-shadow: 0px 2px 27px -9px rgba(0,0,0,0.07);
        box-shadow: 0px 2px 27px -9px rgba(0,0,0,0.07);
    }
    @media only screen and (max-width: 766px) {
        #header{
            padding: 10px !important;
        }
        #banner{
            margin-top: 60px !important;
        }
        #cart--button__mobile{
            display: block !important;
        }
        #menu__mobile{
            display: none !important;
        }
        #cart--button__pc{
            display: none;
        }
        #search--box{
            width: calc(100% - 54px) !important;
        }
        #card--box{
            margin-left: calc(100% - 310px) !important;
        }
    }
    
</style>
<body style="overflow-x: hidden;">
    <div class="container-fluid p-0" style="background: #feefd8;position: fixed;z-index: 99">
        <?php include("./mvc/views/partials/cart.php"); ?>  
        <div id="header" class="row m-0 p-4">
            <div class="col-12 col-md-4 p-0" style="height: 40px;display: flex;">
                <?php include("./mvc/views/partials/search.php"); ?>  
                <div id="cart--button__mobile" class="ml-2 bg text-center" style="width: 50px;height: 40px;border-radius: 7px;display: none;">
                    <i class="fa fa-cart-plus text-white" aria-hidden="true" style="font-size: 130%;line-height: 38px"></i>
                </div>
                
            </div>
            <div id="menu__mobile" class="col-12 col-md-6 p-0" style="height: 40px;">
                <div  class="p-2" style="width: 55%;height: 40px;margin: auto;display: flex;">
                    <p class="font-weight-bold" style="width: 25%;"><a href="/shoppet/" style="text-decoration: none;color: black">Home</a></p>
                    

                    <p class="font-weight-bold" style="width: 25%">Contact</p>
                    <p class="font-weight-bold" style="width: 25%">About</p>                  
                </div>
            </div>
            <div id="cart--button__pc" class="col-12 col-md-2 p-0 " style="height: 40px;">
                <div class="float-right">
                    <div class="btn bg text-white">Check Cart</div>
                    <div class="bg-white" style="width: 30px;height: 30px;background: green;position: absolute;margin-top: -50px;margin-left: 85px;border-radius: 50%">
                        <p id="countOrder" class="text-center font-weight-bold cl" style="line-height: 28px"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>

    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

