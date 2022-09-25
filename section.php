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
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<?php
		if($website_close==1){
			echo '<div style="text-align: center;margin-top: 50px;"><h3>';
			echo $website_close_msg;
			echo '</h3></div>';
		}
		?>