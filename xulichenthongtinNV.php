<?php
$idnv = $_REQUEST['manv'];
$tennv = $_REQUEST['tennv'];
$idpb = $_REQUEST['mapb'];
$diachi = $_REQUEST['diachi'];
//thiet lap ket noi
$bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
//chon csdl de lam viec
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");

$rs = mysqli_query($bienketnoi,"INSERT INTO nhanvien VALUES ($idnv,'$tennv',$idpb,'$diachi')");
//chuyen ve trang hien thi danh sach phong ban
header("Location:xemthongtinnhanvien.php");
?>