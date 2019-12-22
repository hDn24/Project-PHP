<?php
//thiet lap ket noi
$link = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
$db_selected = mysqli_select_db($link, "DULIEU");
$sql = "Select * from phongban";
$rs = mysqli_query($link, $sql);
echo '<table border="1" width="100%">';
echo "<Caption><b>DỮ LIỆU BẢNG PHÒNG BAN</b></Caption>"; //tieu de bang
echo '<TR>
        <TH>IDPB</TH>
        <TH>Tên phòng ban</TH>
        <TH>Mô tả</TH>
        <TH>Xem nhân viên</TH></TR>';
//hien thi tung hang
while($row = mysqli_fetch_array($rs))
{
    echo'<TR><TD>'.$row['idpb'].'</TD><TD>'.$row['tenpb'].'</TD><TD>'.$row['mota'].'</TD><TD align="center"><a href="xemthongtinNVPB.php?IDPB='.$row['idpb'].'">...</a></a></TD></TR>';
}
echo'</table>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
<html>
    <head>

    </head>
    <body bgcolor="#BBFFCC">

    </body>
</html>

<!-- <ahref="xemthongtinNVPB.php?IDPB='.$row['idpb'].'">"xxx"</a>. -->