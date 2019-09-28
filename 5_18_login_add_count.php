<?php
		header('Content-type:text/html;charset=utf8');
		session_start();
		require_once('sql_user.php');
		$er_tf=false;$er_mes='';
		if(!isset($_SESSION['loggin'])){
		
				if(isset($_POST['userid'])&&isset($_POST['userpassword'])){
					$userid=htmlspecialchars($_POST['userid']);
					$userpassword=htmlspecialchars($_POST['userpassword']);
					
						
							$db=new PDO('mysql:host='.servername.';dbname=sportitaiwan',userid,userpassword);
							
							$userid=$userid;
							$userpassword=$userpassword;
							
							$sql='SELECT * FROM login WHERE id=:id AND password=:userpassword';
							$sth=$db->prepare($sql);
							$sth->bindParam(':id',$userid,PDO::PARAM_STR);
							$sth->bindParam(':userpassword',$userpassword,PDO::PARAM_STR);
							$sth->execute();
							$db = null;
							if($sth->fetch(PDO::FETCH_ASSOC))
							{
								
								$_SESSION['loggin']=true;
								$_SESSION['userid']=$userid;
								
							}
							else{
								$er_tf=true;
								$er_mes='錯誤的帳號密碼';
							}
						
				}else
				{
					
					header('index.php');
				}
		}else if( isset($_POST['5_3_thisissomebodyuername']) && isset($_POST['5_3_thisissomebodyuserpassword']) ){
			
		$conn= new PDO("mysql:host=localhost;dbname=sportitaiwan;",userid,userpassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$setnames=$conn->prepare("SET NAMES UTF8");
		$setnames->execute();
		$stmt= $conn->prepare("INSERT INTO login(id, password) VALUES (:num_d,:num_t)");
		$num_d=$_POST['5_3_thisissomebodyuername'];
			$num_t=$_POST['5_3_thisissomebodyuserpassword'];
		$stmt->bindParam(':num_d',$num_d);
		$stmt->bindParam(':num_t',$num_t);
		$stmt->execute();
		header('location:5_18_login_add_count.php');
		}
		else{
				echo "<form action='5_18_login_add_count.php' method='post'>
				<div> 帳號<div/>
    	<input  type='text' name='5_3_thisissomebodyuername'/>
		<div> 密碼<div/>
        <input  type='password' name='5_3_thisissomebodyuserpassword'/><div/>
		<input type='submit' value='submit'>
	</form>";
	
	
		}
		
?>








