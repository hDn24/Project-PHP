<?php
$manv = $_REQUEST['txtmanv'];
$hoten = $_REQUEST['txthoten'];
if($manv=='' || $hoten == '') 
    {header("Location:timkiem.php");}
else {  
    //ket noi csdl
    $bienketnoi = mysqli_connect('localhost', 'root', '') or die ('Could not connect:'.mysql_error());
    //chon CSDL de lam viec
    $db_selected = mysqli_select_db($bienketnoi, 'DULIEU');
    $sql = "Select * from nhanvien where idnv='$manv' and hoten='$hoten'";
    $rs = mysqli_query($bienketnoi, $sql);
    if(mysqli_num_rows($rs) == 0)
        {header("Location:timkiem.php");}
    else {
    echo'<Table border="1" width="100%">';
    echo'<Caption><B>DỮ LIỆU BẢNG NHÂN VIÊN</B></Caption>';
    echo '<TR><TH>IDNV</TH><TH>Họ tên</TH><TH>IDPB</TH><TH>Địa chỉ</TH></TR>';
//hien thi tung hang
while($row = mysqli_fetch_array($rs))
{
    echo'<TR><TD>'.$row['idnv'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['idpb'].'</TD><TD>'.$row['diachi'].'</TD></TR>';
}
    echo'</Table>';
    mysqli_free_result($rs);
    mysqli_close($bienketnoi);
}
}
?>
<html>
    <head>

    </head>
    <body bgcolor="#BBFFCC">

    </body>
</html>