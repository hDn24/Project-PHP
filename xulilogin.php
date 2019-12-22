<?php
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
    if($user=='' || $pass =='') {
        header("Location:login.php");
    }
    else {
        //thiet lap ket noi
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql");
        //mysql_select_db("DULIEU",$link);
        //mo CSDL
        $db_selected = mysqli_select_db($link, "DULIEU");
        $sql = "SELECT * FROM user  WHERE username = '$user' and password = md5('$pass')";
        $rs = mysqli_query($link, $sql);
        if(mysqli_num_rows($rs) == 0) {
            header("Location:login.php");
        }
        else {
            header("Location:trangchu1.php");
        }
        mysqli_free_result($rs);
        mysqli_close($link);
    } 
?>