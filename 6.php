<?php


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

<center>
   <img src="assets/img/Quick_view/6.jpg", icon="cursor">
</center>

</body>
</html>