<?php
$user = $_REQUEST['username'];
$pass = md5($_REQUEST['password']);
    if($user=='' || $pass =='') {
        header("Location:login.php");
    }
    else {
        //thiet lap ket noi
        $link = mysqli_connect("localhost","root","") or die("Khong the ket noi den csdl MySql");
        //mysql_select_db("DULIEU",$link);
        //mo CSDL
        $db_selected = mysqli_select_db($link, "DULIEU");
        $sql = "INSERT INTO user VALUES ('$user','$pass')";
        $rs = mysqli_query($link, $sql);
        header("Location:trangchu1.php");
        mysqli_free_result($rs);
        mysqli_close($link);
    } 
?>