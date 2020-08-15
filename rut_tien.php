<?php ob_start(); session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Rút tiền</title>
<style>
* {margin: 0px; padding: 0px;}
body {background-color: #fff;position: absolute;}
.banner {width: 100%; height: 250px; background-image:url(img/banner3.jpg);}
.container {width:400px; height:400px; margin:auto;background-color:#fff; font-size:18px; font-family:Arial, Helvetica, sans-serif;border-radius:10px;text-align: center;}
.text {width:200px; height:40px;outline: none; margin-top:20px;border-top: none;border-left: none; border-right: none;border-bottom:#80d894d6 1px solid ; line-height: 40px;padding-left: 15px; }
.login {padding-top:20px; text-align:center;font-size:24px;color:#961e27; font-weight:bold;}
.submit {width:150px; height:35px; margin-top:20px; background-color: #c12a2ab0; border-radius:20px;border: #80d894d6 1px solid;color: #FFF; transition: transform .2s;margin-right: 30px; }
.submit:hover {color: #000;background-color: #80d894d6;transform: scale(1.2);}
.noti {text-align:center; color: #fd4747d6; font-size:15px;margin-top: 20px;}
#a {padding-top: 8px;}
.fogot_pass {text-decoration: none; color: #000; margin-left: 20px;font-size: 12px;transition: transform .2s;font-weight: bold;}
.fogot_pass:hover {transform: scale(1.2);}
.logo {text-align: center;}
.logo1 {width: 300px; height: 130px;}
.passss {position: relative;bottom: 50px;left: 55%; width: 60px;}
.radio {margin-top: 20px;margin-left: 20px;}
</style>
</head>
<body>
	<img src="img/banner3.jpg"  width="100%" height="300px">
<div class="container">

        <form method="post">
        	<div class="logo"><a href="myaccount.php"><img src="img/agribank.jpg" alt="logo" class="logo1"></a></div>
	        <div class="login">Vui lòng nhập số tiền cần rút</div>
	        <div><input type="number" name="money" placeholder="Tối thiểu 50k tối đa 50 triệu" class="text" min="50000" 
            max="50000000" maxlength="8"></div>
	        <div><p>Hoặc chọn số tiền:</p><input type="radio" name="money" value="100000" class="radio">100000
	        	<input type="radio" name="money" value="200000" class="radio">200000
	        	<input type="radio" name="money" value="500000" class="radio">500000</div>
	        	<input type="radio" name="money" value="1000000" class="radio">1000000
	        	<input type="radio" name="money" value="2000000" class="radio">2000000
	        	<input type="radio" name="money" value="5000000" class="radio">5000000
	        </div>
	        <div style="text-align: center; height: 40px;"><input type="submit" name="rut" class="submit" 
            value="Rút tiền" onClick="if(confirm('Thực hiện rút tiền?')) 
    return true; else return false;"><div class="passss"><img src="img/vantay.png" style="width: 45px;height: 45px;padding-top: 10px;"></div></div>
	        
	        
        </form>

<div class="noti">
<?php
if (empty($_SESSION['user'])) header('location:login.php'); 
include('act.php');
    if(isset($_POST['rut']))
	{
	   if(empty($_POST['money'])) echo "Quý khách vui lòng nhập hoặc chọn số tiền!";
	   else
	   {
	   $test=rut_tien($_SESSION['user'],$_POST['money']);
	 }}
?>
</div>
</div>
</body>
<div class="footer" style="position: relative;bottom: -80px;"><img src="img/footer.png" width="100%" ></div>
<?php ob_end_flush(); ?>
</html>
