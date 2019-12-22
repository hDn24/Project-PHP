<?php
//lay ma pb tu trnag xemthongtinpb.php
$mapb = $_REQUEST['IDPB'];  
    //ket noi csdl
    $bienketnoi = mysqli_connect('localhost', 'root', '') or die ('Could not connect:'.mysql_error());
    //chon CSDL de lam viec
    $db_selected = mysqli_select_db($bienketnoi, 'DULIEU');
    if($mapb == ''){
        $sql = "Select * from nhanvien";
        $rs = mysqli_query($bienketnoi, $sql);
    }
    else{
        $sql = "Select * from nhanvien where idpb=$mapb";
        $rs = mysqli_query($bienketnoi, $sql);
    // if(mysqli_num_rows($rs) == 0)
    //     {header("Location:timkiem.php");}
    // else {
    echo'<table border="1" width="100%">';
    echo'<Caption><B>DỮ LIỆU BẢNG NHÂN VIÊN</B></Caption>';
    echo '<tr><th>IDNV</th><th>Họ tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
    //hien thi tung hang
    while($row = mysqli_fetch_array($rs))
    {
        echo'<TR><TD>'.$row['idnv'].'</TD><TD>'.$row['hoten'].'</TD><td>'.$row['idpb'].'</td><td>'.$row['diachi'].'</td></TR>';
    }
        echo'</table>';
        mysqli_free_result($rs);
        mysqli_close($bienketnoi);
}
?>
<html>
    <head>

    </head>
    <body bgcolor="#BBFFCC">

    </body>
</html>