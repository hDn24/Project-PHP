<?php
//thiet lap ket noi
$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den csdl MySql".mysqli_error());
$db_selected = mysqli_select_db($link, "DULIEU");
$sql = "Select * from nhanvien";
$rs = mysqli_query($link, $sql);
echo '<Table border="1" width="100%">';
echo "<Caption><b>DỮ LIỆU BẢNG NHÂN VIÊN</b></Caption>"; //tieu de bang
echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH><TH>Xóa</TH></TR>';
//hien thi tung hang
while($row = mysqli_fetch_array($rs))
{
    echo'<TR><TD>'.$row['idnv'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['idpb'].'</TD><TD>'.$row['diachi'].'</TD><TD align="center"><a href="xulixoathongtinNV.php?IDNV='.$row['idnv'].'">xxx</a></TD></TR>';
}
echo'</Table>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
<html>
    <head>

    </head>
    <body bgcolor="#BBFFCC">

    </body>
</html>