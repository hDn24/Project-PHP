<html>
<head>
	<!-- <script language="JavaScript">
	function f() {
		var st1=document.form1.T1.value;
		var st2=document.form1.P1.value;
	}
	function ok() {
		var st1=document.form1.T1.value;
		var st2=document.form1.P1.value;
		if(st1==""|| st2=="") //alert("user or password error");
		//document.write("user hoac password khong hop le");
	}
	function reset() {
		document.form1.T1.value="";
		document.form1.P1.value="";
	}
	
	</script> -->
</head>
<body bgcolor="#BBFFCC" onload="doument.form1.username.focus()">
	<form name=form1 method="POST" action="xulilogin.php">
	<table border=0 align=center>
		<caption align="center">LOGIN</caption>
		<TR>
			<th align=right>User</th>
			<th> <input type="Text" name="username" size="20"</th>
		</TR>
		<TR>
			<th align=right>Password</TH>
			<th> <input type="Password" name="password" size="20"</th>
		</TR>
		<TR>
            <th></th>
			<th> <INPUT type="Submit", name="Login" value="OK" >
			    <INPUT type="Reset" name="Reset" value="Reset"</th>
		</TR>
	</table>
	</form>
</body>
</html>