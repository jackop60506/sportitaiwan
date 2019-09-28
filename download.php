<?php
		//header("Content-Type:text/html;charset=utf-8");	
		session_start();
		if(isset($_SESSION['loggin']) && isset($_GET['num'])){
			$num=$_GET['num'];
			
			header("Content-type:application");
			header("Content-Disposition: attachment; filename=".$num.".pdf");	
			rename("images","pictures");
			readfile('D:/xamp/upload/'.$_SESSION['userid'].'/'.$num.'/'.$num.'.pdf');	
			exit(0);
		}else{
			header("Location:second.php");
		}

?>
