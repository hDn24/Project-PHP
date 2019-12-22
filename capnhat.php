<?php
//thiet lap ket noi
$bienketnoi = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den csdl MySql".mysqli_error());
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");
$sql = "Select * from phongban";
$rs = mysqli_query($bienketnoi, $sql);
echo '<Form action="xulicapnhat.php">';
echo '<table border="1" width="100%">';
echo "<Caption><b>DỮ LIỆU BẢNG PHÒNG BAN</b></Caption>"; //tieu de bang
echo '<TR>
        <TH>Mã phòng ban</TH>
        <TH>Tên phòng ban</TH>
        <TH>Mô tả</TH>
        <TH>Cập nhật</TH></TR>';
while($row = mysqli_fetch_array($rs)) {
    echo'<TR><TD>'.$row['idpb'].'</TD><TD>'.$row['tenpb'].'</TD><TD>'.$row['mota'].'</TD><TD align="center"><a href="form_capnhatpb.php?IDPB='.$row['idpb'].'">xxx</a></a></TD></TR>';
}
echo'</table>';
echo'</Form>';
mysqli_free_result($rs);
mysqli_close($bienketnoi);
?>
<html>
    <head>

    </head>
    <body bgcolor="#BBFFCC">

    </body>
</html>