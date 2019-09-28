<?php
if(isset($_POST['page']) && isset($_SESSION['loggin'])){
		
		
		$userpath='D:/xamp/upload/'.$_SESSION['userid'].'/'.$form_num.'/';
		
		if(!is_dir('D:/xamp/upload/'.$_SESSION['userid'].'/'.$form_num)){
			mkdir($userpath);
		}
		$path='D:/xamp/upload/'.$_SESSION['userid'].'/'.$form_num.'/';
				
				$data=scandir($path);
				$data_length=count($data)-1;
				
				foreach($data as $t){
						if (strpos($t, 'pdf') !== false) {
							unlink($path.$t);
						}
				}
				//json
				foreach($data as $t){
						if (strpos($t, 'recover.json') !== false) {
							unlink($path.$t);
						}
				}
				foreach($data as $t){
						if (strpos($t, 'txt') !== false) {
							unlink($path.$t);
						}
				}
				//		pic
				
				if($picstate1=="upload"){
					$picname1=$fe1['name'];
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="1"){
								unlink($path.$t);
							}
						}
					}
				}
				if($picstate2=="upload"){
					$picname2=$fe2['name'];
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="2"){
								unlink($path.$t);
							}
						}
					}
				}
				
				if($picstate1=="exist"){
					
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="1"){
								$picname1=substr($t,strpos($t,"_")+1);
								$name1=$t;
							}
						}
					}	
				}
				if($picstate2=="exist"){
					
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="2"){
								$picname2=substr($t,strpos($t,"_")+1);
								$name2=$t;							
							}
						}
					}
				}
								
				if($picstate3=="4change3"){
					$temp="";
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="3"){
								unlink($path.$t);
							}
							if($t[strpos($t,"j")-2]=="4"){
								$temp=$t;
								$temp[0]="3";
								$name3=$temp;
								rename($path.$t,$path.$name3);
								$picname3=substr($t,strpos($t,"_")+1);
							}
							
						}	
				}
				}
				if($picstate3=="upload"){
					$picname3=$fe3['name'];
					
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="3"){
								unlink($path.$t);
							}
						}
					}
				}
				if($picstate4=="upload"){
					$picname4=$fe4['name'];
					foreach($data as $t){
						if(isset($t[strpos($t,"j")-2])){
							if($t[strpos($t,"j")-2]=="4"){
								unlink($path.$t);
							}
						}
					}
				}
					
						if($picstate3=="exist"){
							
							foreach($data as $t){
								if(isset($t[strpos($t,"j")-2])){									
									if($t[strpos($t,"j")-2]=="3"){
										$picname3=substr($t,strpos($t,"_")+1);
										$name3=$t;
									}
								}
							}
						}
						if($picstate4=="exist"){
							
							foreach($data as $t){
								if(isset($t[strpos($t,"j")-2])){
									if($t[strpos($t,"j")-2]=="4"){
										$picname4=substr($t,strpos($t,"_")+1);
										$name4=$t;
									}
								}
							}
						}	
							
						
						if($picstate3=="not_exist"){
							
							foreach($data as $t){
								if(isset($t[strpos($t,"j")-2])){
									if($t[strpos($t,"j")-2]=="3"){
										unlink($path.$t);
									}
								}
							}
						}
						if($picstate4=="not_exist"){
											
							foreach($data as $t){
								if(isset($t[strpos($t,"j")-2])){
									if($t[strpos($t,"j")-2]=="4"){
										unlink($path.$t);
									}
								}
							}			
						}	
				
		// 去查是否上傳
		$dir='D:/xamp/upload/'.$_SESSION['userid'].'/'.$form_num.'/';
		$now=getdate();
		$filename1="1-j-".$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s_".$picname1;
		$filename2="2-j-".$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s_".$picname2;
		$savepath1=$dir.$filename1;
		$savepath2=$dir.$filename2;
		
		if($fe3!=-1){
			$filename3="3-j-".$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s_".$picname3;
			$savepath3=$dir.$filename3;
		}
		if($fe4!=-1){
			$filename4="4-j-".$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s_".$picname4;
			$savepath4=$dir.$filename4;
		}
			
	if($picstate1=="upload"){
		
		if($fe1["error"]>0)
		{
				echo "not access";
		}else
		{
			if($fe1["type"]=="image/jpeg" 
			|| $fe1["type"]=="image/jpg" 
			|| $fe1["type"]=="image/JPG" 
			|| $fe1["type"]=="image/png"
			|| $fe1["type"]=="image/gif"
			|| $fe1["type"]=="image/pjpeg" 
			|| $fe1["type"]=="image/pjpg" 
			|| $fe1["type"]=="image/pJPG" 
			|| $fe1["type"]=="image/x-png"
			|| $fe1["type"]=="image/pgif"
			){
					if(file_exists($dir.$fe1['name'])){
						echo "same file uploaded";
					}
					else{
						move_uploaded_file($fe1["tmp_name"],$savepath1);
						$name1= $filename1;				
					}
			}else{
				echo "not right type";
			}
					
		}
	}
	if($picstate2=="upload"){
		if($fe2["error"]>0)
		{
				echo "not access";
		}else
		{
			if($fe2["type"]=="image/jpeg" 
			|| $fe2["type"]=="image/jpg" 
			|| $fe2["type"]=="image/JPG" 
			|| $fe2["type"]=="image/png"
			|| $fe2["type"]=="image/gif"
			|| $fe2["type"]=="image/pjpeg" 
			|| $fe2["type"]=="image/pjpg" 
			|| $fe2["type"]=="image/pJPG" 
			|| $fe2["type"]=="image/x-png"
			|| $fe2["type"]=="image/pgif"
			){
					if(file_exists($dir.$fe2['name'])){
						echo "same file uploaded";
					}
					else{
						move_uploaded_file($fe2["tmp_name"],$savepath2);
						$name2= $filename2;			
					}
			}else{
				echo "not right type";
			}
					
		}
	}
	
	if($picstate3=="upload"){
		if($fe3["error"]>0)
		{
				echo "not access";
		}else
		{
			if($fe3["type"]=="image/jpeg" 
			|| $fe3["type"]=="image/jpg" 
			|| $fe3["type"]=="image/JPG" 
			|| $fe3["type"]=="image/png"
			|| $fe3["type"]=="image/gif"
			|| $fe3["type"]=="image/pjpeg" 
			|| $fe3["type"]=="image/pjpg" 
			|| $fe3["type"]=="image/pJPG" 
			|| $fe3["type"]=="image/x-png"
			|| $fe3["type"]=="image/pgif"
			){
					if(file_exists($dir.$fe3['name'])){
						echo "same file uploaded";
					}
					else{
						move_uploaded_file($fe3["tmp_name"],$savepath3);
						$name3= $filename3;				
					}
			}else{
				echo "not right type";
			}
					
		}
	}

	if($picstate4=="upload"){
					echo $picstate4."fuckfuckfucfuckfuckfuckfucfuckfuckfuckfucfuckfuckfuckfucfuckfuckfuckfuckfuck";

		if($fe4["error"]>0)
		{
				echo "not access";
		}else
		{
			if($fe4["type"]=="image/jpeg" 
			|| $fe4["type"]=="image/jpg" 
			|| $fe4["type"]=="image/JPG" 
			|| $fe4["type"]=="image/png"
			|| $fe4["type"]=="image/gif"
			|| $fe4["type"]=="image/pjpeg" 
			|| $fe4["type"]=="image/pjpg" 
			|| $fe4["type"]=="image/pJPG" 
			|| $fe4["type"]=="image/x-png"
			|| $fe4["type"]=="image/pgif"
			){
					if(file_exists($dir.$fe4['name'])){
						echo "same file uploaded";
					}
					else{
						move_uploaded_file($fe4["tmp_name"],$savepath4);
						
						$name4= $filename4;				
					}
			}else{
				echo "not right type";
			}
					
		}
	
	
}

}else{
		header("Location:select_page.php");
}
				
		
?>