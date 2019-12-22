<?php
$idnv = $_REQUEST['IDNV'];
//thiet lap ket noi
$bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
//chon csdl de lam viec
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");

$rs = mysqli_query($bienketnoi,"DELETE FROM nhanvien WHERE idnv=$idnv");
//chuyen ve trang hien thi danh sach nhan vien
header("Location:xemthongtinnhanvien.php");
?>