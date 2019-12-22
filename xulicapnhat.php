<?php
$tenpb = $_REQUEST['txtTenpb'];
$mota = $_REQUEST['txtMota'];
$myID = $_REQUEST['ID'];
//thiet lap ket noi
$bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
//chon csdl de lam viec
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");

$rs = mysqli_query($bienketnoi,"UPDATE phongban SET tenpb ='$tenpb', mota='$mota' WHERE idpb = $myID");
//chuyen ve trang hien thi danh sach phong ban
header("Location:capnhat.php");
?>