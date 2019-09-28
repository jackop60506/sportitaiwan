<?php		
	
if(isset($_POST['page']) && isset($_SESSION['loggin'])){
					if(($p==1 && $in_num==32)||
					   ($p==2 && $in_num==64)||
					   ($p==3 && $in_num==33)||
					   ($p==4 && $in_num==46)||
					   ($p==5 && $in_num==29)
					){
						$ftp=true;				
					}
					else{
						$ftp=false;
					}	
	for($a=1;$a<10;$a++){
		if($input[$a]==null || $input[$a]==''){
			$ftp=false;
			break;
		}
		
	}
	//針對中間選擇
	for($a=9;$a<=$in_num-8;$a++){
		
		if($input[$a]=='true'){
			continue;
		}else if($input[$a]=='false'){
			continue;
		}else if($input[$a]=='static'){
			continue;
		}
		else{
			$ftp=false;
			break;
		}
		
	}
	//針對
		if($input[$in_num-5]==null || $input[$in_num-5]==''){
			$ftp=false;
		}
		if($input[$in_num-6]==null || $input[$in_num-6]==''){
			$ftp=false;
		}
		if($input[$in_num-7]==null || $input[$in_num-7]==''){
			$ftp=false;
		}
		if($input[$in_num-4]==null || $input[$in_num-4]==''){
			$ftp=false;
		}
		if($input[$in_num-3]==null || $input[$in_num-3]==''){
			$ftp=false;
		}
		//針對兩張圖片
		if($fe1["error"]>0 || $fe2['error']>0)
		{
				$ftp=false;
		}
}else{
		header("Location:select_page.php");
	}
		
		
		
?>  
