<html>
<head>
<script>
function validform()
{
	var y=document.forms['regform']['username'].value;
	if(y=="")
	{
		alert("Name Empty");
		document.forms['regform']['username'].focus();
		return false;
	}
}
</script>
</head>
<body>
<form action="regprocess.php" onsubmit="return validform()" name="regform" method="post">
<label>User Name: <input type="text" name="username"/></label>
<label>Password: <input type="password" name="password"/></label>
<label>E-mail: <input type="email" name="email"/></label>
<input type="submit" name="reg" value="SUBMIT"/>
</form>
</body>
</html>