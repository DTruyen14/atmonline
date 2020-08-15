<!DOCTYPE HTML>
<?php ob_start(); session_start();$session=$_SESSION['user'];
if (empty($_SESSION['user'])) header('location:login.php'); ?>
<html>
<head>
<meta charset="utf-8">
<title>Vấn tin tài khoản</title>
<style>
* {margin: 0px; padding: 0px;}
body {background-color: #fff;}
.container {width:800px; height:740px; margin:auto; background-color:#fff; font-size:18px; font-family:Arial, Helvetica, sans-serif;border-radius:10px;text-align: center;}
.text2 { margin-top: -20px; width:400px; outline: none; margin-top:20px;border-top: none;border-left: none; border-right: none;border-bottom:#80d894d6 1px solid ; padding-left: 15px;position: relative; left: 50%;margin-top: -20px;}
.login {padding-top:20px;text-align:center;font-size:24px;color:#961e27; font-weight:bold; margin-bottom: 40px;}
.submit {width:180px; height:45px; margin-top:20px; background-color: #c12a2ab0; border-radius:23px;border: #80d894d6 1px solid;color: #FFF; transition: transform .2s;margin-right: 30px; font-size: 17px; }
.noti {text-align:center; color: #fd4747d6; font-size:15px;}
#a {padding-top: 8px;}
.logo {text-align: center;}
.logo1 {width: 300px; height: 130px;}
.vantay {position: relative;bottom: 50px;left: 600px; width: 60px;}
.left {width: 200px;margin-top: 40px;padding-left: 100px;text-align: left;font-weight: bold;}
</style>
</head>
<body>
<div class="container">
        	<div class="logo"><a href="myaccount.php"><img src="img/agribank.jpg" alt="logo" class="logo1"></a></div>
	        <div class="login">Vấn tin tài khoản</div>
	        <div><p class="left">Tài khoản nguồn:</p><div class="text2"><?php echo $session; include('connect.php');
$run=mysqli_query($conn,"select * from user where stk='$session'");
$row=mysqli_fetch_array($run);
$name=$row['ten'];
$phone=$row['sdt'];
$address=$row['diachi'];
$sodu=$row['sodu'];
$bird_day=$row['ngaysinh'];
$type=$row['loaitk'];?></div>
	        </div>
	        <p class="left">Chủ tài khoản:</p><div class="text2"><?php echo $name; ?></div> 
	        <p class="left">Số dư:</p><div class="text2"><?php echo $sodu; ?></div> 
	        <p class="left">SĐT:</p><div class="text2"><?php echo $phone; ?></div>
	        <p class="left">Địa chỉ:</p><div class="text2"><?php echo $address; ?> </div>
	        <p class="left">Ngày sinh:</p><div class="text2"><?php echo $bird_day; ?></div>
	        <p class="left">Loại Tài khoản:</p><div class="text2"><?php echo $type; ?></div>
	        <div style="text-align: center; margin-top: 20px;"> 
	        	<a href="javascript:history.back()"><input type="button" name="back" value="Quay Lại" class="submit"></a>
	        </div>
</div>

</body>
<div class="footer" style="position: relative;bottom: -80px;"><img src="img/footer.png" width="100%" ></div>
<?php ob_end_flush(); ?>
</html>