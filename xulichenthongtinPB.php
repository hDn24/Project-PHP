<?php
$idpb = $_REQUEST['mapb'];
$tenpb = $_REQUEST['tenpb'];
$mota = $_REQUEST['mota'];
//thiet lap ket noi
$bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
//chon csdl de lam viec
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");

$rs = mysqli_query($bienketnoi,"INSERT INTO phongban VALUES ($idpb, '$tenpb', '$mota')");
//chuyen ve trang hien thi danh sach phong ban
header("Location:xemthongtinpb.php");
?>