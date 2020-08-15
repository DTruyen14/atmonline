<?php $server='localhost';
$user='root';
$pass='';
$data='agribank';
$conn=mysqli_connect($server,$user,$pass,$data) or die ('not connect!!!');
mysqli_query($conn,'set names"utf8"');
?>
