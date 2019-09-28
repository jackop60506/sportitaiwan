<?php
	header("Content-Type:text/html;charset=utf-8");	
	session_start();
	//此為word上傳
	/*
	class word 
	{  
		public $tfp;
		
		function start($p) 
		{ 
			$Ary =$_POST;
			$fe1=$_FILES['p1'];
			$fe2=$_FILES['p2'];
			
			$form_num=$_POST['form_num'];
			
			$this->tfp=true;
			$in_num=1;
			$input=Array();	
			
			//生成word第一部分判斷涵式
			function tf($t){
				if($t=='true'){
					return '<td>V</td>
						  <td></td>';
				}else if($t=='false'){
					return '<td></td>
						  <td>V</td>';
				}
				else if($t=='static'){
					return '<td></td>
						  <td></td>';
				}
			}
			foreach($Ary as $b){
				$input[$in_num++]=$b;
			}
			require_once('error_test.php');
			
					if($p==1 && $this->tfp==true){
						require_once('savepicture.php');
						ob_start();
						require_once('gethead.php');
						require_once('gettable1.php');
						require_once('getbottom.php');
						
					}
					else if($p==2 && $this->tfp==true){
						require_once('savepicture.php');
						ob_start();
						require_once('gethead.php');
						require_once('gettable2.php');
						require_once('getbottom.php');
						
					}
					else if($p==3 && $this->tfp==true){
						require_once('savepicture.php');
						ob_start();
						
						require_once('gethead.php');
						require_once('gettable3.php');
						require_once('getbottom.php');
					
					}
					else if($p==4 && $this->tfp==true){
						require_once('savepicture.php');
						ob_start();
						
						require_once('gethead.php');
						require_once('gettable4.php');
						require_once('getbottom.php');
						
					}
					else if($p==5 && $this->tfp==true){
						require_once('savepicture.php');
						ob_start();
						require_once('gethead.php');
						require_once('gettable5.php');
						require_once('getbottom.php');
						
					}		
		} 
				
		function save($path) 
		{ 
			if($this->tfp==true){	
				$data = ob_get_contents(); 
				ob_end_clean(); 
				$this->wirtefile ($path,$data);
				header("Location:select_page.php?filestatus=ok");
			}
			else{
				echo '表單有部分沒輸入完成';
				echo '<a href="select_page.php">點此跳回選擇表單</a>';
			}
		} 

		function wirtefile ($fn,$data) 
		{ 
			$fp=fopen($fn,"wb"); 
			fwrite($fp,$data); 
			fclose($fp); 
		} 
		function f_unset(){
			unlink("D:/xamp/upload/data.doc");
		}
	} 
	
	if(isset($_POST['page']) && isset($_SESSION['loggin'])){
		$page=$_POST['page'];
		$form_num=$_POST['form_num'];

		$fe1=$_FILES['p1'];
		$fe2=$_FILES['p2'];
		
		$now=getdate();
		$word=new word;
		$word->start($page);
		
		
		// 去查是否上傳
		$userpath='D:/xamp/upload/'.$_SESSION['userid']."/".$form_num;
		
		$savepath=$userpath.'/'.$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s"."_data.doc";
		$word->save($savepath);
	}else{
			header("Location:select_page.php");
	}
	*/
	include_once ('/tcpdf/tcpdf.php');
	class PDF_report1 extends TCPDF
{
    //Page header
    function Header()
    {
        // 自訂頁首內容
    }
    function Footer()
    {
        // 自訂頁尾內容
    }
}
	if(isset($_POST['page']) && isset($_SESSION['loggin'])){
		 ignore_user_abort(true);
			$picname1="-1";
			$picname2="-1";
			$picname3="-1";
			$picname4="-1";
			function tf($t){
				if($t=='true'){
					return '<td>V</td>
						  <td></td>';
				}else if($t=='false'){
					return '<td></td>
						  <td>V</td>';
				}else if($t=='static'){
					return '<td></td>
					 <td></td>';
				}else if($t=='1'){
					return '<td>1</td><td></td>';
				}else if($t=='2'){
					return '<td>2</td><td></td>';
				}else if($t=='3'){
					return '<td>3</td><td></td>';
				}else if($t=='4'){
					return '<td>4</td><td></td>';
				}else if($t=='5'){
					return '<td>5</td><td></td>';
				}
				/*
				switch($t){
					case '1':return '<td>1</td><td></td>';break;
					case '2':return '<td>2</td><td></td>';break;
					case '3':return '<td>3</td><td></td>';break;
				}
				*/
			}
			$page=$_POST['page'];
			$p=$page;
			
			$now=getdate();
			
			$in_num=1;
			$Ary =$_POST;
			$form_num=$_POST['form_num'];
			$fe1=$_FILES['p1'];
			$fe2=$_FILES['p2'];
			/*5/11*/
			$fe3=isset($_FILES['p3'])?$_FILES['p3']:-1;		
			$fe4=isset($_FILES['p4'])?$_FILES['p4']:-1;
			$picstate1=$_POST['picstate1'];
			$picstate2=$_POST['picstate2'];
			$picstate3=$_POST['picstate3'];
			$picstate4=$_POST['picstate4'];
			/*511*/
			
			
			
			
			$tfp=true;
			$userpath='D:/xamp/upload/'.$_SESSION['userid']."/".$form_num;
			$gethead_title='';
			
			$input=Array();	
					foreach($Ary as $b){
				$input[$in_num++]=$b;
			}
		
		$pdf = new PDF_report1('P','mm','A4', true, 'UTF-8', false);
		$pdf->SetFont('msungstdlight','',16);
		$pdf->AddPage();
		
			//require_once('error_test.php');
			if($tfp==false){
				echo '表單有部分沒輸入完成';
				echo '<a href="select_page.php">點此跳回選擇表單</a>';
			}else{
				require_once('savepicture.php');
				switch($p){
					case 1:{$gethead_title='<div style="text-align:center;"><b style="font-size:17px;">106年運動i臺灣計畫</b></div>
	<b style="text-align:center;font-size:17px;">專案一、運動文化扎根專案 訪視紀錄表</b>';
							require_once('gethead.php');
							require_once('gettable1.php');
							break;}
					case 2:{$gethead_title='<div style="text-align:center;"><b style="font-size:17px;">106年運動i臺灣計畫</b></div>
					<b style="text-align:center;font-size:17px;">專案二、運動知識擴增專案</b><div/>
					<b style="text-align:center;font-size:17px;">（二）提升運動參與途徑 訪視紀錄表</b>';
							require_once('gethead.php');
							require_once('gettable2.php');
							break;}
					case 3:{$gethead_title='<div style="text-align:center;"><b style="font-size:17px;">106年運動i臺灣計畫</b></div>
					<b style="text-align:center;font-size:17px;">專案三、運動種子傳遞專案 訪視紀錄表</b>';
							require_once('gethead.php');
							require_once('gettable3.php');
							break;}
					case 4:{$gethead_title='<b style="text-align:center;font-size:17px;">106年運動i臺灣計畫</b><div/>
					<b style="text-align:center;font-size:17px;">專案四、運動城市推展專案</b><div/>
					<b style="text-align:center;font-size:17px;">（一）基層運動風氣推展 訪視紀錄表</b>';
							require_once('gethead.php');
							require_once('gettable4.php');
							break;}
					case 5:{$gethead_title='106年運動i臺灣計畫 專案四、運動城市推展（二）運動熱區 訪視紀錄表';
							require_once('gethead.php');
							require_once('gettable5.php');
							break;}
					
					}
				
				
				require_once('getbottom.php');
				$html =$head.$table.$bottom;
				
				$pdf->writeHTML($html, true, false, true, false, '');
				
				
				$datapath='/'.$form_num.".pdf";/*$now['mon']."m".$now['mday']."d".($now['hours']+7)."hour".$now['minutes']."min".$now['seconds']."s".*/
				
				$savepath=$userpath.$datapath;
				$pdf->Output($savepath, 'F');
				
				require_once('cre_recover.php');
				header("Location:second.php");
				
			}
	}
		else{
			header("Location:select_page.php");
	}
?>  
