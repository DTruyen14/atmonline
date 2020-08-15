<!DOCTYPE HTML>
<?php ob_start(); session_start();$session=$_SESSION['user'];?>
<html>
<head>
<meta charset="utf-8">
<title>Chuyển khoản</title>
<style>
* {margin: 0px; padding: 0px;}
body {background-color: #fff;}
.container {width:800px; height:740px; margin:auto; background-color:#fff; font-size:18px; font-family:Arial, Helvetica, sans-serif;border-radius:10px;text-align: center;}
.text { width:200px; height:40px;outline: none; margin-top:20px;border-top: none;border-left: none; border-right: none;border-bottom:#80d894d6 1px solid ; line-height: 40px;padding-left: 15px; }
.text2 {width:217px; height:40px;outline: none; margin-top:20px;border-top: none;border-left: none; border-right: none;border-bottom:#80d894d6 1px solid ; line-height: 40px;padding-left: 15px; }
.login {padding-top:20px;text-align:center;font-size:24px;color:#961e27; font-weight:bold; margin-bottom: 40px;}
.submit {width:150px; height:35px; margin-top:20px; background-color: #c12a2ab0; border-radius:20px;border: #80d894d6 1px solid;color: #FFF; transition: transform .2s;margin-right: 30px; }

.noti {text-align:center; color: #fd4747d6; font-size:15px;}
#a {padding-top: 8px;}
.logo {text-align: center;}
.logo1 {width: 300px; height: 130px;}
.vantay {position: relative;bottom: 50px;left: 600px; width: 60px;}
.left {float: left;width: 200px;margin-top: 20px;padding-left: 100px;text-align: left;}
</style>
</head>
<body>
<div class="container">

        <form method="post">
        	<div class="logo"><a href="myaccount.php"><img src="img/agribank.jpg" alt="logo" class="logo1"></a></div>
	        <div class="login">Chuyển Khoản Liên Ngân Hàng</div>
	        <div><p class="left">Tài khoản nguồn:</p>
	        	<select name="tk" class="text2">
	        		<option value="<?php echo $session;?>" ><?php echo $session; ?></option>
	       		</select></div>
	        <div><p class="left">Ngân hàng thụ hưởng:</p>
	          <select name="bank" class="text2">
	            <option value="MB" title="Ngân hàng TMCP Quân Đội"> MB</option>
	            <option value="BIDV" title="Ngân hàng TMCP Đầu tư và Phát triển"> BIDV</option>
	            <option value="Vietcombank" title="Ngân hàng TMCP Ngoại thương"> Vietcombank</option>
	            <option value="Teckcombank" title="Ngân hàng TMCP Kỹ thương Việt Nam"> Teckcombank</option>
	            <option value="SHB" title="Ngân hàng TMCP Sài Gòn Hà Nội"> SHB</option>
              </select>
	        </div>
	        <div><p class="left">Số tài khoản thụ hưởng:</p><input type="number" name="stk" placeholder="3612xxxxxxxxx" class="text" maxlength="13"></div>
	        <div><p class="left">Số tiền:</p><input type="number" name="money" placeholder="Lớn hơn 50k tối đa 50 triệu" class="text" min="50000" max="50000000" maxlength="8"></div>
	        <div><p class="left">Nội dung:</p><input type="text" name="note" placeholder="Agibank chuyển khoản" class="text" maxlength="50"></div>
	        <div style="text-align: center; margin-top: 20px;"> 
	        	<a href="myaccount.php"><input type="button" name="back" value="Quay Lại" class="submit"></a>
	        	<input type="submit" name="continue" class="submit" value="Chuyển khoản" 
                onClick="if(confirm('Thực hiện chuyển tiền?')) return true; else return false;">
	        	<div class="vantay"><img src="img/vantay.png" style="width: 45px;height: 45px;padding-top: 10px;"></div> 
	        </div>
        </form>

<div class="noti">
<?php
if (empty($_SESSION['user'])) header('location:login.php'); 
include('act.php');
    if(isset($_POST['continue']))
	{
	   if(empty($_POST['tk'])||empty($_POST['stk'])||empty($_POST['money'])) {echo "Quý khách vui lòng nhập đầy đủ thông tin của tài khoản thụ hưởng!";}
	   else
	   {  $test=chuyenkhoan($_POST['tk'],$_POST['stk'],$_POST['money'],$_POST['note']); }
	}
?>
</div>

</div>

</body>
<div class="footer" style="position: relative;bottom: -80px;"><img src="img/footer.png" width="100%" ></div>
<?php ob_end_flush(); ?>
</html>