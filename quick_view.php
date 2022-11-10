<?php
//include 'constant.inc.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

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
 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quick View</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


   <link rel="stylesheet" href="magnify.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

</head>
<body>
   
<?php include 'header.php'; ?> 

<section class="quick-view">

   <h1 class="heading">quick view</h1>

   <?php
     $pid = $_GET['pid'];
     $select_products = $con->prepare("SELECT * FROM `dish` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['dish']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['dish_detail']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image']; ?>">
      <div class="row">
         <div class="image-container">
            <div class="main-image">
               <img src="uploaded_img/<?= $fetch_product['image']; ?>" alt="">     
            </div>
            <div class="sub-image">
               <img src="uploaded_img/<?= $fetch_product['image']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image']; ?>" alt="">
            </div>
         </div>
         <div class="content">
            <div class="name"><?= $fetch_product['dish']; ?></div>
            <div class="flex">
               <div class="price"><span>$</span><?= $fetch_product['dish_detail']; ?><span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
            </div>
            <div class="details"><?= $fetch_product['dish_details']; ?></div>
            <div class="flex-btn">
               <input type="submit" value="add to cart" class="btn" name="add_to_cart">
               <input class="option-btn" type="submit" name="add_to_wishlist" value="add to wishlist">
            </div> 
         </div>
      </div>
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>



    <script src="jquery.magnify.js" charset="utf-8"></script>
    <script>
    $(document).ready(function() {
      $('.zoom').magnify();
    });
    </script>



</body>
</html>