<?php
		header("Content-type:text/html;charset=utf8");
		session_start();
		if(!isset($_SESSION['loggin'])){
			header("Location:index.php");
		}
		else
		{
			setcookie(session_name(), session_id(), time() + 0, "/");
			unset($_SESSION['loggin']);
			unset($_SESSION['userid']);
		}
?>


<html>
<head>
	<meta http-equiv="Content-Type" Content="text/html" charset="utf-8"/>
</head>
<body>
		<?php
					header("Location:index.php");
		?>
</body>
</html>