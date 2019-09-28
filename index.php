<?php
		header("Content-type:text/html;charset=utf8");
		session_start();
		require_once("sql_user.php");
		$er_tf=false;$er_mes='';
		if(!isset($_SESSION['loggin'])){
		
				if(isset($_POST['userid'])&&isset($_POST['userpassword'])){
					$userid=htmlspecialchars($_POST['userid']);
					$userpassword=htmlspecialchars($_POST['userpassword']);
					
						
						//if(test_string($userid,$userpassword)==true){
							$db=new PDO("mysql:host=".servername.";dbname=sportitaiwan",userid,userpassword);
							
							$userid=$userid;
							$userpassword=$userpassword;
							
							$sql="SELECT * FROM login WHERE id=:id AND password=:userpassword";
							$sth=$db->prepare($sql);
							$sth->bindParam(":id",$userid,PDO::PARAM_STR);
							$sth->bindParam(":userpassword",$userpassword,PDO::PARAM_STR);
							$sth->execute();
							$db = null;
							if($sth->fetch(PDO::FETCH_ASSOC))
							{
								
								$_SESSION['loggin']=true;
								$_SESSION["userid"]=$userid;
								header("Location:second.php");
							}
							else{
								$er_tf=true;
								$er_mes="錯誤的帳號密碼";
							}
						//}else{
						//	$er_tf=true;
						//	$er_mes="錯誤的帳號密碼";
						//}
				}else
				{
					
					
				}
		}else{
				header("Location:select_page.php");
		}
		/*
		function test_string($u,$p){
			$patt='/^[a-zA-z0-9_]{5,}$/';
			
			if((preg_match($patt,$u)==true)&&(preg_match($patt,$p)==true)){
				$er=true;
			}else{
				$er=false;
			}
			return $er;
		}
		*/
		
?>


<html>
<head>
	<meta http-equiv="Content-Type" Content="text/html" charset="utf-8"/>
	<meta name="google-site-verification" content="Q6mXM906mg2MKQ3QyBGTh52xuB79mDMlvSOHH7-GK10" />
</head>

<title>運動i台灣</title>
<style>
body{
	background:url(image/background.png);
	background-repeat:no-repeat;
}
.login{
		width:570px;
		height:475px;
		position:absolute;
		top:50%;left:50%;
		margin-top:-223.5px;
		margin-left:-285px;
		background:url(image/login.png);
		

		}
.account{
	position:absolute;
	top:34%;left:30%;
	}
.password{
	position:absolute;
	top:56%;left:30%;
	}
.loginbutton{
	position:absolute;
	top:77%;left:13%;
	background-color:white;
	}
.loginbutton2{
	border:0;
	background-color:white;
	width:426px;
	height:52px;
	background-image:url(image/loginbutton.png);
	}
.loginbutton2:active{
	background:url(image/loginbutton2.png);
	}
.error{
	position:absolute;
	top:20%;left:18%;
	color:red;
	font-family:微軟正黑體;
	font-size:20px;
}
</style>
<script src='jquery.min.js'></script>
<script>
					$(document).ready(function(){
						
						var input_test=function(){
							var in1=$("input[name='userid']").val(),
								in2=$("input[name='userpassword']").val(),
								in1_tf,in2_tf,error=true;
								
								
								if(in1==''|| in2==''){
									alert('請輸入帳號密碼');
									error=false;
								}
								
								return error;
								
								
						}
						//alert(error_message);
						$("form").on('submit',function(){
							
							return input_test();
										
						});
						
					});
						
</script>
</head>
<body >
<form action="index.php" method="post" >
	<div class="login">
		<div class='error'><?php if($er_tf==true){echo $er_mes;}?></div>
    	<div class="account"><input type="text" name="userid" placeholder="請輸入帳號" style="background-color: transparent; border: 0; height:30px; font-size:24px">
        </div>
        <div class="password"><input type="password" name="userpassword" placeholder="請輸入密碼" style="background-color: transparent; border: 0; height:30px; font-size:24px">
        </div>
        <div class="loginbutton"><input type="submit" class="loginbutton2" value="" onclick="background='image/loginbutton2.png'">
    </div>
	</form>
</body>
</html>






