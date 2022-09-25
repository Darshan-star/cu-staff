<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
$totalPrice=0;
$getSetting=getSetting();

$website_close=$getSetting['website_close'];
$website_close_msg=$getSetting['website_close_msg'];
$cart_min_price=$getSetting['cart_min_price'];
$cart_min_price_msg=$getSetting['cart_min_price_msg'];

getDishCartStatus();

if(isset($_POST['update_cart'])){
	foreach($_POST['qty'] as $key=>$val){
		if(isset($_SESSION['FOOD_USER_ID'])){
			if($val[0]==0){
				mysqli_query($con,"delete from dish_cart where dish_detail_id='$key' and user_id=".$_SESSION['FOOD_USER_ID']);
			}else{
				mysqli_query($con,"update dish_cart set qty='".$val[0]."' where dish_detail_id='$key' and user_id=".$_SESSION['FOOD_USER_ID']);	
			}
		}else{
			if($val[0]==0){
				unset($_SESSION['cart'][$key]['qty']);
			}else{
				$_SESSION['cart'][$key]['qty']=$val[0];	
			}
		}
	}
}

$cartArr=getUserFullCart();


$totalPrice=getcartTotalPrice();
$totalCartDish=count($cartArr);

$getWalletAmt=0;
if(isset($_SESSION['FOOD_USER_ID'])){
	$getWalletAmt=getWalletAmt($_SESSION['FOOD_USER_ID']);
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- <title><?php echo FRONT_SITE_NAME?></title> <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <title>CU FACULTIES</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
        .header-bottom.transparent-bar.black-bg.stick{
                 background-color: antiquewhite;
        }
        .header-middle{

            background-image: url('assets/img/logo/login-bg.jpg');
            overflow: auto;
 

        }
        .btn {
           border: 2px solid black;
           background-color: white;
           color: black;
           padding: 14px 28px;
           font-size: 16px;
           cursor: pointer;
        }
        .info{
            border-color: #2196F3;
            color: doderblue;
        }
        .info:hover {
            background: #2196F3;
            color: white;
        }
        .default:hover{
            background: #e7e7e7;
        }
        .icon-user:before {
            content: "\e005";
            color: white;
            font-size: 30px;
        }
        /*.wishlist-text > p, .login-text-content > p{
            color: white;
            line-height: 19px;
            margin: -2px 0 0;
        }*/
        .header-login{
            margin: 0;
            padding: 5px;
            padding-top: 6px;
            border: solid white 3px;
            border-radius: 5%;
            background-color: black;
        }

    </style>
    </head>
    <body>
        <!-- header start -->
        <header class="header-area">
            <div class="header-top black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-4 col-12 col-sm-4">
                            <div class="welcome-area">
                                
                            </div>
                        </div>
						<div class="col-lg-2 col-md-4 col-12 col-sm-4">
							<?php
								if(isset($_SESSION['FOOD_USER_NAME'])){
								?>
							<div id="wallet_top_box">
								<a href="<?php echo FRONT_SITE_PATH?>wallet" style="color:#fff;">
									Wallet Amt:- <?php echo $getWalletAmt?>
								</a>
								
							</div>
								<?php  } ?>
						</div>
                        <div class="col-lg-2 col-md-8 col-12 col-sm-8">
                            <div class="account-curr-lang-wrap f-right">
                                <?php
								if(isset($_SESSION['FOOD_USER_NAME'])){
								?>
								<ul>
                                    <li class="top-hover"><a href="#"><?php echo "Welcome <span id='user_top_name'>".$_SESSION['FOOD_USER_NAME'];?></span>  <i class="ion-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="<?php echo FRONT_SITE_PATH?>profile">Profile  </a></li>
                                            <li><a href="<?php echo FRONT_SITE_PATH?>order_history">Order History</a></li>
                                            <li><a href="<?php echo FRONT_SITE_PATH?>logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-4">
                            <div class="logo">
                                <a href="<?php echo FRONT_SITE_PATH?>">
                                    <img alt="" src="<?php echo FRONT_SITE_PATH?>assets/img/logo/logo3.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12 col-sm-8">
                            <div class="header-middle-right f-right">
                                <div class="header-login">
                                    <?php
									if(!isset($_SESSION['FOOD_USER_NAME'])){
										?>
									<a href="<?php echo FRONT_SITE_PATH?>login_register">
                                        <div class="header-icon-style">
                                            <i class="icon-user icons header_icon"></i>
                                        </div>
                                        <div class="login-text-content header_icon">
											
												<p style="color:white">Register <br> or <span>Sign in</span></p>
												
                                        </div>
                                    </a>
									<?php
											}
											?>
                                </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            <div class="header-bottom transparent-bar black-bg">
                <div class="container" style="padding:0px;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="main-menu">  
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo FRONT_SITE_PATH?>home">Faculties</a></li>
                                        <li><a href="<?php echo FRONT_SITE_PATH?>about-us">about</a></li>
                                        <li><a href="<?php echo FRONT_SITE_PATH?>contact-us">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area-start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul class="menu-overflow" id="nav">
										<li><a href="<?php echo FRONT_SITE_PATH?>shop">Home</a></li>
										<li><a href="<?php echo FRONT_SITE_PATH?>about-us">About Us</a></li>
										<li><a href="<?php echo FRONT_SITE_PATH?>contact-us">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
        </header>