<?php
include ("header.php");
$cat_dish='';
$cat_dish_arr=array();
$type='';
$search_str='';
if(isset($_GET['cat_dish'])){
	$cat_dish=get_safe_value($_GET['cat_dish']);
	$cat_dish_arr=array_filter(explode(':',$cat_dish));
	$cat_dish_str=implode(",",$cat_dish_arr);
}

if(isset($_GET['type'])){
	$type=get_safe_value($_GET['type']);
}

if(isset($_GET['search_str'])){
	$search_str=get_safe_value($_GET['search_str']);
}



$arrType=array("eng","non-eng","all");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CU FACULTIES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate01.css">

<link rel="stylesheet" type="text/css" href="product card popup/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom js file link  -->
   <script src="product card popup/js/script.js" defer></script>


        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!--
<style>
.col-lg-3 {
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 200px;
  left: 80px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.col-lg-3 a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #2196F3;
  display: block;


.col-lg-3 a:hover {
  color: #064579;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .col-lg-3 {padding-top: 50px;}
  .col-lg-3 a {font-size: 18px;}
}
</style> 
-->

<style>
	/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
  padding: 30px 0;
}
.counts .counters span {
  font-size: 48px;
  display: block;
  color: #000000;
  font-weight: 700;
}
.counts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: #37423b;
}
</style>

</head>
<!-- <div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
		<?php
		if($website_close==1){
			echo '<div style="text-align: center;margin-top: 50px;"><h3>';
			echo $website_close_msg;
			echo '</h3></div>';
		}
		?>
<div class="animt">
<h2 data-text="&nbsp;CU FACULTIES ! &nbps;">&nbsp;CU FACULTIES !&nbsp;</h2>
</div>
 


         <div class="shop-page-area pt-100 pb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
						<div class="shop-topbar-wrapper">
                            <div class="product-sorting-wrapper">
                                <div class="product-show shorting-style search_box_main">
									<input class="search_box" type="textbox" id="search" value="<?php echo $search_str?>"/>
									<input class="search_box seahc_box_btn"  type="button" class="submit btn-style" value="Search" onclick="setSearch()"/>									
                                </div>
								
								<div class="product-show shorting-style ">
								<?php
								foreach($arrType as $list){
									$type_radio_selected='';
									if($list==$type){
										$type_radio_selected="checked='checked'";
									}
									?>
									<?php echo strtoupper($list)?> <input type="radio" class="dish_radio" <?php echo $type_radio_selected?> name="type" value="<?php echo $list?>" onclick="setFoodType('<?php echo $list?>')"/>&nbsp;
									<?php
								}									
								?>								
								   
                                </div>
                            </div>
                        </div>
                        <?php
                            $cat_id=0;
                            $product_sql="select * from dish where status=1";
                            if($cat_dish!=''){		
                                $product_sql.=" and category_id in ($cat_dish_str) ";
                            }
							if($type!='' && $type!='both'){		
                                $product_sql.=" and type ='$type' ";
                            }
							
							if($search_str!=''){		
                                $product_sql.=" and (dish like '%$search_str%' or dish_detail like '%$search_str%') ";
                            }
							
							
                            $product_sql.=" order by dish desc";
                            $product_res=mysqli_query($con,$product_sql);
                            $product_count=mysqli_num_rows($product_res);
                        ?>
                        <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <?php if($product_count>0){?>
                                    <div class="row">
                                        <?php while($product_row=mysqli_fetch_assoc($product_res)){?>
                                        <div class="product-width col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-30">
                                            <div class="product-wrapper">
                                                <div class="product-img">
                                                    <a href="<?php echo FRONT_SITE_PATH.$product_row['id'] ?>", target="_blank">
                                                        <img src="<?php echo SITE_DISH_IMAGE.$product_row['image']?>" alt=""; width='200px'; height='250px'>
                                                    </a>

                                                </div>
                                                <div class="product-content" id="dish_detail">
                                                    <h4>
                                            
														<?php
														if($product_row['type']=='Engineering Dept.'){
															echo "<img src='assets/img/icon-img/eng.jpg'/>";
														}else{
															echo "<img src='assets/img/icon-img/eng.jpg'/>";
														}
														?>
														
														<a href="quick_view.php?pid=<?= $fetch_product['id']; ?>"><?php echo $product_row['dish'];
														getRatingByDishId($product_row['id']);
                                                        ?>
                                                        </a>
                                                        <br>
                                                        <a href="javascript:void(0)"><?php echo $product_row['dish_detail']; getRatingByDishId($product_row['id']); 
														?> 
											
														</a>
                                                         
                                                    
                                                    </h4>
													<?php
													$dish_attr_res=mysqli_query($con,"select * from dish_details where status='1' and dish_id='".$product_row['id']."' order by price asc");
													?>
                                                    <div class="product-price-wrapper">
                                                        <?php
														while($dish_attr_row=mysqli_fetch_assoc($dish_attr_res)){
															if($website_close==0){
															echo "<input type='radio' class='dish_radio' name='radio_".$product_row['id']."' id='radio_".$product_row['id']."' value='".$dish_attr_row['id']."'/>";
															}
															// echo $dish_attr_row['attribute'];
															// echo "&nbsp;";
															// echo "<span class='price'>(".$dish_attr_row['price'].")</span>";
															// $added_msg="";
															// if(array_key_exists($dish_attr_row['id'],$cartArr)){
															// 	$added_qty=getUserFullCart($dish_attr_row['id']);
															// 	$added_msg="(Added -$added_qty)";
															// }
															// echo " <span class='cart_already_added' id='shop_added_msg_".$dish_attr_row['id']."'>".$added_msg."</span>";
               //                                              echo "<span class='cart_already_added' id='faculties_detail_".$dish_attr_row['id']."'>".$dish_detail."</span>";
															echo "&nbsp;&nbsp;&nbsp;";
														}
														?>
                                                    </div>

													<!-- <?php if($website_close==0){?>
													<div class="product-price-wrapper">
														<select class="select" id="qty<?php echo $product_row['id']?>">
															<option value="0">Qty</option>
															<?php
															// for($i=1;$i<=20;$i++){
															// 	echo "<option>$i</option>";
															// }
															?>
														</select>
														<i class="fa fa-cart-plus cart_icon" aria-hidden="true" onclick="add_to_cart('<?php echo $product_row['id']?>','add')"></i>
													</div> -->
													<?php } else{
														?>
														<!-- <div class="product-price-wrapper">
														<strong><?php echo $website_close_msg?>
														</strong></div> -->
														<?php
													}
													?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>        
                                    </div>
                                <?php } else{ 
                                    echo "No content found";   
                                }?>
                            </div>
                            
                        </div>
                    </div>
                    <?php
                    $cat_res=mysqli_query($con,"select * from category where status=1 order by order_number desc")
                    ?>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Search By Categories</h4>
								<div class="shop-catigory">
									<ul id="faq" class="category_list">
										<li><a href="<?php echo FRONT_SITE_PATH?>home"><u>clear</u></a></li>
                                        <?php 
                                        while($cat_row=mysqli_fetch_assoc($cat_res)){
                                            $class="selected";
                                            if($cat_id==$cat_row['id']){
                                                $class="active";
                                            }
											$is_checked='';
											if(in_array($cat_row['id'],$cat_dish_arr)){
												$is_checked="checked='checked'";
											}
											
											echo "<li> <input $is_checked onclick=set_checkbox('".$cat_row['id']."') type='checkbox' class='cat_checkbox' name='cat_arr[]' value='".$cat_row['id']."'/>".$cat_row['category']."</li>";  

                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<form method="get" id="frmCatDish">
			<input type="hidden" name="cat_dish" id="cat_dish" value='<?php echo $cat_dish?>'/>
			<input type="hidden" name="type" id="type" value='<?php echo $type?>'/>
			<input type="hidden" name="search_str" id="search_str" value='<?php echo $search_str?>'/>
			
		</form> 
<br>

 
<!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-36184fa3-c078-4c01-bcf4-74832464ea9e"></div> -->
<hr>

<!-- count section -->
<link href="https://custudentszone.azureedge.net/assets/vendor/aos/aos.css" rel="stylesheet">

<section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="21170" data-purecounter-duration="2"
              class="purecounter"></span>
            <p>Students Visited</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="2"
              class="purecounter"></span>
            <p>Avg.Time in Min.</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="13644" data-purecounter-duration="2"
              class="purecounter"></span>
            <p>New Visited</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2"
              class="purecounter"></span>
            <p>Per Minute</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

 

<script src="assets/js/vendor/purecounter.js"></script>
<?php
include("footer.php");
?>