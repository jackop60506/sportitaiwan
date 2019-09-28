<?php
	header("Content-type:text/html;charset=utf8");
	session_start();
	require_once("sql_user.php");
	if(isset($_SESSION['loggin']) && !empty($_COOKIE['PHPSESSID'])){
		
		setcookie(session_name(), session_id(), time() + 21600, "/");
		if(isset($_GET['page']) && $_GET['page']!=null){
			$page=$_GET['page'];
			if($_GET['page']>10){
				$page=1;
			}
		}else{
			$page=1;
		}
		
		//資料庫讀寫
		
		$conn= new PDO("mysql:host=localhost;dbname=sportitaiwan;",userid,userpassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$setnames=$conn->prepare("SET NAMES UTF8");
		$setnames->execute();
		//分頁取得結果
		$static_page=$page;
		$stmt= $conn->prepare("SELECT * FROM event_to_form WHERE (event_num>=:num_d) AND (event_num<=:num_t)");
		$stmt->bindParam(':num_d',$num_d);
		$stmt->bindParam(':num_t',$num_t);
		$num_t=10*$static_page;
		$num_d=10*$static_page-9;
		$write_number=0;
		$stmt->execute();
		$r = $stmt->fetchALL();	
		// 去查是否上傳
		$userpath='D:/xamp/upload/'.$_SESSION['userid'];
		$alluserpath='D:/xamp/upload/';
		$all_number=0;
		if(is_readable($userpath)){
			$write_number=count(scandir($userpath))-2;
			
			$r_data=scandir($userpath);
			
			$count_data=scandir($alluserpath);
			//記得家鄭委員的 526<-還沒加
			foreach($count_data as $t){
				if($t=="1961" ||
				   $t=="csmitaiwan"||
				   $t=="hhh711223"||
				   $t=="quenhuen" ||
				   $t=="sm2015" ||
				   $t=="yuing" 
				){
					$temp_up='D:/xamp/upload/'.$t;
					
					$all_number=$all_number+count(scandir($temp_up))-2;
				}
				
			}
		}else{
			$r_data=null;
		}
		
		
		
		
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>運動i台灣</title>
</head>
<style>
 body{
	margin:0 0;
	padding:0 0;
	background-repeat:no-repeat;
	font-family:'微軟正黑體';
 }
p{ 
	text-align:center;
	font-size:24px;
	font-family:'微軟正黑體';
	color:#396;
	font-weight: 900;
	line-height:30px;
	}
.logoutbutton{
	border:0;
	background-color:white;
	width:97px;
	height:39px;
	background-image:url(image/logoutbutton1.png);
	

	}
.logoutbutton:active{
	background:url(image/logoutbutton2.png);
	}
	.list{
	list-style:none;
	border-bottom:1px dotted black;
	
	}
.list a{
	font-family:'微軟正黑體';
	font-size:20px;
	line-height:60px;
	color:#61BD8F;
	text-decoration:none;
	font-weight: bold;
	padding-bottom:10px;
	
	}
.list a:hover{
	color: #F93;
	font-weight: bold;
	}
.list2{
	float:right;
	}
.page:visited,.page:link {
	color:black;
}	
.page{
	
	font-family:'微軟正黑體';
	border:1px #008888 solid;
	color:black;
	text-decoration:none;
	font-size:20px;
	padding:0px 2px;
}

</style>
<body background='image/background.png'>
<table border='0' align='center' width='1087' height='794' background='image/inside.png'>
<tr>
<td  colspan='2'  align='center'  width='1110px' height='81px'></td>
</tr>
<tr>
<td width='265' height='200' align='center'><p>
歡迎登入</br>".$_SESSION['userid']."<br />
<form action='layout.php' method='post'>
<input type='submit'  class='logoutbutton' value='' onclick='background='image/logoutbutton2.png''></td>
</form>
<td rowspan='2' height='600' valign='top'>
<div class='list2' style='width:780px; height:700px;'>
";

echo "
<li class='list'><span style='font-size:22px;display:inline-block; width:780px; height:30px;'>
						<span style='line-height:35px;text-align:center;display:inline-block; width:50px; height:30px;'>
								編號
						</span>
						<span style='line-height:35px;text-align:center;display:inline-block; width:500px; height:30px;'>
								活動資訊
						</span>
						<span style='text-align:center;display:inline-block; width:90px; height:30px;'>
								是否填寫
						</span>
						<span style='text-align:center;display:inline-block; width:120px; height:30px;'>
								下載檔案
						</span>
				</span>
				
</li>
";
foreach($r as $R){
	echo "
<li class='list'>
<span style='display:inline-block; width:780px; height:62px;'>

<span style='text-align:left;display:inline-block; width:50px; height:30px; '>
&nbsp;&nbsp;&nbsp;".$R['event_num']."
</span>


<span style='text-align:left;display:inline-block; width:500px; height:30px; '>
<a  href='select_page.php?page=".$R['form_num']."&form_num=".$R['event_num']."'><b>".$R['event_name']."</b></a>
</span>
";

	for($q=2;$q<count($r_data);$q++){
		
		if($userpath."/".$r_data[$q] == $userpath."/".$R['event_num'] ){
			echo "
			<span style='text-align:center;display:inline-block; width:90px; height:30px;'>
				<img style='height:30px;' src='image/uploaded.png'>
				</span>
				
				<span  style='text-align:center;display:inline-block; width:120px; height:30px;'>
				  <a style='height:30px; display:inline-block;' href='download.php?num=".$r_data[$q]."'>
				  <img style='height:35px;' src='image/下載箭頭.png'>
				  </a>
				  
				  </span>
				  
			</span></li>
			";
			break;
		}
		
	}
	

	
	
	
	echo "</span></li>";


}
echo "<span style='display:block;margin-top:5px;'>";
for($a=1;$a<=8;$a++){
	if($a==$static_page){
		echo "
		<a class='page' style='background-color:#008866; color:white;' href='second.php?page=".$a."'>".$a."</a>";
		continue;
	}
	echo "
	<a class='page'  href='second.php?page=".$a."'>".$a."</a>";
}
echo "</span>";
/*
<form action='select_page.php' method='post'>
<li class='list'><a href=''><b>這張可以前往表單1</b></a>
<input value='填寫' type='submit' style='width:40px;height:40px;'>
<input type='hidden' name='page' value='1'>
</li>
</form>
<form action='select_page.php' method='post'>
<li class='list'><a href=''><b>這張可以前往表單2</b></a>
<input value='填寫' type='submit' style='width:40px;height:40px;'>
<input type='hidden' name='page' value='2'>
</li>
</form>
<form action='select_page.php' method='post'>
<li class='list'><a href=''><b>這張可以前往表單3</b></a>
<input value='填寫' type='submit' style='width:40px;height:40px;'>
<input type='hidden' name='page' value='3'>
</li>
</form>
<form action='select_page.php' method='post'>
<li class='list'><a href=''><b>這張可以前往表單4</b></a>
<input value='填寫' type='submit' style='width:40px;height:40px;'>
<input type='hidden' name='page' value='4'>
</li>
</form>
<form action='select_page.php' method='post'>
<li class='list'><a href=''><b>這張可以前往表單5</b></a>
<input value='填寫' type='submit' style='width:40px;height:40px;'>
<input type='hidden' name='page' value='5'>
</li>
</form>
<li class='list'><a href=''><b>表格6</b></a></li>
<li class='list'><a href=''><b>表格7</b></a></li>
<li class='list'><a href=''><b>表格8</b></a></li>
<li class='list'><a href=''><b>表格9</b></a></li>
<li class='list'><a href=''><b>表格10</b></a></li>
*/


echo "
	
</div>

</td>
</tr>
<td  style='padding:0px 0px;width:250px;height:520px;'>
	<div style='width:245px;border-bottom:1px dotted black; padding-bottom:5px;padding-left:20px;font-size:15px;font-family:'微軟正黑體';color:#396;'>您已填寫: ".$write_number." 場  (每個委員至少要 7 場)</div>
	<div style='width:245px;border-bottom:1px dotted black; padding-bottom:5px;padding-left:20px;font-size:15px;font-family:'微軟正黑體';color:#396;'>所有委員們填寫率: ".(int)(100*($all_number/49))." % (".$all_number."/49 場)</div>
	<div style='width:245px;border-bottom:1px dotted black; padding-bottom:5px;padding-left:20px;font-size:24px;font-family:'微軟正黑體';color:#396;'>文件下載區 </div>
	<div class='information' style='height:350px;padding-top:5px;overflow:scroll;overflow-x:hidden;width:265px; '>
	<a href='713/106年運動i臺灣計畫桃園市訪視委員印領清冊.docx' download>106年運動i臺灣計畫桃園市訪視委員印領清冊.word</a><div/><hr width=250></hr>
	<a href='713/11297_【確定版】106年運動i臺灣計畫申請總表-央款金額版，市配款待通知(變更登記版) (復原).xls' download>【確定版】106年運動i臺灣計畫申請總表-央款金額版，市配款待通知(變更登記版) (復原).xls</a><div/><hr width=250></hr>
	<a href='網頁使用手冊.pptx' download>網頁使用手冊.pptx</a><div/><hr width=250></hr>
	<a href='713/106分組說明-縣市完成簡報版.pptx' download>106分組說明-縣市完成簡報版.pptx</a>
	</div>
</td>
</body>
</html>" ;
	}
	else{
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>運動i台灣</title>
</head>
<body>
		請先做登入<div/><a href='index.php'>首頁</a>
</body>
</html>
";
	}
	
?>


