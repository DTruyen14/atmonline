<?php ob_start(); session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập</title>
<style>
* {margin: 0px; padding: 0px;}
body {background-color: #fff;position: absolute;}
.banner {width: 100%; height: 250px; background-image:url(img/banner3.jpg);}
.container {width:300px; height:440px; margin:auto;background-color:#fff; font-size:18px; font-family:Arial, Helvetica, sans-serif;border-radius:10px;text-align: center;}
.text {width:200px; height:40px;outline: none; margin-top:20px;border-top: none;border-left: none; border-right: none;border-bottom:#80d894d6 1px solid ; line-height: 40px;padding-left: 15px; }
.login {padding-top:20px; text-align:center;font-size:24px;color:#961e27; font-weight:bold;}
.submit {width:150px; height:35px; margin-top:20px; background-color: #c12a2ab0; border-radius:20px;border: #80d894d6 1px solid;color: #FFF; transition: transform .2s;margin-right: 30px; }
.submit:hover {color: #000;background-color: #80d894d6;transform: scale(1.2);}
.noti {text-align:center; color: #fd4747d6; font-size:15px;}
#a {padding-top: 8px;}
.fogot_pass {text-decoration: none; color: #000; margin-left: 20px;font-size: 12px;transition: transform .2s;font-weight: bold;}
.fogot_pass:hover {transform: scale(1.2);}
.logo {text-align: center;}
.logo1 {width: 300px; height: 130px;}
.passss {position: relative;bottom: 50px;left: 210px; width: 60px;}
.losspass {text-decoration: none;font-size: 14px; color:#000000db;position: relative;top: -40px;}
</style>
</head>
<body>
	<img src="img/banner3.jpg"  width="100%" height="300px">
<div class="container">

        <form method="post">
        	<div class="logo"><img src="img/agribank.jpg" alt="logo" class="logo1"></div>
	        <div class="login">Đăng nhập</div>
	        <div><input type="number" name="stk" placeholder="3612xxxxxxxxx" class="text"></div>
	        <div><input type="password" name="password" placeholder="*******" class="text"></div>
	        <div style="text-align: center;"><input type="submit" name="login" class="submit" value="Đăng nhập"><div class="passss"><img src="img/vantay.png" style="width: 45px;height: 45px;padding-top: 10px;"></div></div>
	        <a href="forgotpass.php" rel="quên mật khẩu" class="losspass">Quên mật khẩu</a>
	        
        </form>

<div class="noti">
<?php 
if (!empty($_SESSION['user'])) header('location:myaccount.php'); 
include('act.php');
    if(isset($_POST['login']))
	{
	   if(empty($_POST['stk'])||empty($_POST['password'])) echo "Quý khách vui lòng nhập đầy đủ thông tin đăng nhập!";
	   else
	   {
	   $test=select_user($_POST['stk'],$_POST['password']);
	 }}
?>
</div>
</div>
</body>
<div class="footer" style="position: relative;bottom: -80px;"><img src="img/footer.png" width="100%" ></div>
<?php ob_end_flush(); ?>
</html>
