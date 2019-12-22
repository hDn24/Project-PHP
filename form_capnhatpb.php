<?php
$myID = $_REQUEST['IDPB']; //pb01
//thiet lap ket noi
// $bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql".mysqli_error());
$bienketnoi = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql");
$db_selected = mysqli_select_db($bienketnoi, "DULIEU");
$sql = "Select * from phongban where idpb=$myID";
$rs = mysqli_query($bienketnoi, $sql);
$row = mysqli_fetch_array($rs);
?>
<html>
    <head>
        <title>Form cập nhật phòng ban</title>
    </head>
    <body bgcolor="#BBFFCC">
        <Form action = "xulicapnhat.php?IDPB=<?php echo $row['idpb'];?>" method='post'>;
        <table  border='0' align ='center'>
            <TR>
                <TD>Tên  phòng ban</TD>
                <TD><input type='Text' size='20' name='txtTenpb' value='<?php echo $row['tenpb'];?>'></TD>
            </TR>
            <TR>
                <TD>Mô tả</TD>
                <TD><input type='Text' size='20' name='txtMota' value='<?php echo $row['mota'];?>'></TD>
            </TR>
            
            <TR align = 'center'>
                <TD colspan='2'><input type='submit' value='OK'><input type='reset' value='reset'></TD>
            </TR>
        </table>
        </form>
    </body>
</html>