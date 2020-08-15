<!DOCTYPE HTML>
<?php ob_start();session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<title>Tài khoản</title>
<style>
* {margin: 0px; padding: 0px;}
.container {width:800px; height:550px; margin:auto; background-color:#fff; font-size:18px; font-family:Arial, Helvetica, sans-serif;border-radius:10px;text-align: center; border:1px #CC6666 solid }
a {text-decoration: none; line-height:50px; color:#FFF}
.tentaikhoan{width:800px; height:100px; float:left; line-height:100px; color:#c12a2ab0}
.l{width:400px; height:450px; float:left}
.r{width:400px; height:450px; float:left}
.chucnang{ background-color: #c12a2ab0; border-radius:20px;border: #80d894d6 1px solid;color:#FFF;
 width:320px; height:50px; margin:40px auto;}
.logo1 {width: 800px; height: 380px; text-align:center; margin:auto}
a:hover{ color:#66F}
</style>
</head>

<body>
<div class="logo1"><a href="myaccount.php"><img src="img/agribank.jpg" alt="logo" width="682" height="380"></a></div>
<div class="container">
	<div class="tentaikhoan"><marquee>
    <?php 
	include('connect.php');
	$tk=$_SESSION['user'];
	$run=mysqli_query($conn,"select * from user where stk='$tk'");
	$row=mysqli_fetch_array($run);
	echo "Xin chào khách hàng"." ".$row['ten']?></marquee>
    </div>
	<div class="l">
    <div class="chucnang"><a href="van_tin.php">Vấn Tin Tài Khoản</a></div>
    <div class="chucnang"><a href="rut_tien.php">Rút Tiền</a></div>
	<div class="chucnang"><a href="chuyen_khoan.php">Chuyển Khoản</a></div>
    </div>
    <div class="r">
	
    <div class="chucnang"><a href="edit_pin.php">Đổi PIN</a></div>
    <div class="chucnang"><a href="myaccount.php">In Sao Kê</a></div>
    <div class="chucnang"><a href="logout.php">Đăng xuất</a></div>
    </div>

</div>
<div ><img src="img/footer.png" width="100%" ></div>
<?php 
if(empty($_SESSION['user'])) 
header('location:login.php');
?>

</body>
<?php ob_end_flush(); ?>
</html>