<?php	
if(isset($_POST["page"]) && isset($_SESSION["loggin"])){
	$head= '
			<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" Content="text/html" charset="utf-8"/>
		<script src="jquery.min.js"></script>
		<style>
			body,th,td{
				font-family:"標楷體";
				font-size:12px;
			}
				table,td,th{
					border:1px black solid;
					word-break: break-all;
					text-align:center;
					
				}
				.table1{
					width:600px;
					align:center;
					
				}
				table{
					width:100%;
					align:center;
				}
				.third_comment{
					font-family:新細明體;
					width:600px;
					word-wrap: break-word;
				}	
				.thirdpart{
					width:600px;
				}
				textarea{
					resize:none;
				}
		</style>
	</head>
	<body>
	<div class="table1" >
	'.$gethead_title;
	if($p==1){
		$head.='<div></div>
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;"width="17%">
				訪視日期：民國
			</td>
			<td style="text-align:center;border:0px white;" width="6%">
				'.$input[1].'
				<hr width="28px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				年
			</td>
			<td style="text-align:center;border:0px white;" width="5%">
				'.$input[2].'
				<hr width="23px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				月
			</td>
			<td style="text-align:center;border:0px white;" width="5%">
				'.$input[3].'
				<hr width="23px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				日
			</td>
			<td style="text-align:center;border:0px white;" width="7%">
				( 星期
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
			'.$input[4].'
			<hr width="16px">
			</td>
			<td style="text-align:left;border:0px white;" width="2%">
				)
			</td>
			<td style="text-align:left;border:0px white;" width="12%">
				訪視縣市 :
			</td>
			<td style="text-align:left;border:0px white;" width="27%">
				&nbsp;&nbsp;'.$input[5].'
				<hr width="120px">
			</td>
		</tr>
	</table>
	
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;"width="11%">
				主辦單位:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;'.$input[6].'
				<hr width="118px">
			</td>
			<td style="text-align:left;border:0px white;" width="11%">
				承辦單位:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;'.$input[7].'
				<hr width="118px">
			</td>
			<td style="text-align:left;border:0px white;" width="11%">
				辦理地點:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;'.$input[8].'
				<hr width="118px">
			</td>
		</tr>
	</table>
	';
	}else{
		$head.='<div></div>
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;"width="17%">
				訪視日期：民國
			</td>
			<td style="text-align:center;border:0px white;" width="6%">
				'.$input[1].'
				<hr width="28px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				年
			</td>
			<td style="text-align:center;border:0px white;" width="5%">
				'.$input[2].'
				<hr width="23px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				月
			</td>
			<td style="text-align:center;border:0px white;" width="5%">
				'.$input[3].'
				<hr width="23px">
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
				日
			</td>
			<td style="text-align:center;border:0px white;" width="7%">
				( 星期
			</td>
			<td style="text-align:center;border:0px white;" width="4%">
			'.$input[4].'
			<hr width="16px">
			</td>
			<td style="text-align:left;border:0px white;" width="2%">
				)
			</td>
		</tr>
	</table>
	
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;" width="11%">
				訪視縣市:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;&nbsp;'.$input[6].'
				<hr width="120px">
			</td>
			<td style="text-align:left;border:0px white;"width="11%">
				辦理地點:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;'.$input[7].'
				<hr width="118px">
			</td>
			<td style="text-align:left;border:0px white;" width="11%">
				主辦單位:
			</td>
			<td style="text-align:left;border:0px white;" width="22.5%">
				&nbsp;'.$input[8].'
				<hr width="118px">
			</td>
			
		</tr>
	</table>
	';
	}
		if ($p==3 || $p==4){
			$head.='<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;" width="11%">
				活動全名:
			</td>
			<td style="text-align:left;border:0px white;" width="50%">
				&nbsp;'.$input[9].'
				<hr width="270px">
			</td>
			<td style="text-align:left;border:0px white;" width="39%">
				(非訪視活動者免填)
			</td>
			
		</tr>
	</table>
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;" width="26%">
				本次活動是否辦理保險：
			</td>
			<td style="text-align:left;border:0px white;" width="74%">
				';
		}else if($p==2 || $p==1){
			$head.='<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;" width="11%">
				活動全名:
			</td>
			<td style="text-align:left;border:0px white;" width="89%">
				&nbsp;'.$input[9].'
				<hr width="270px">
			</td>
		</tr>
	</table>
	<table  style="line-height:12px;" >
		<tr>
			<td style="text-align:left;border:0px white;" width="26%">
				本次活動是否辦理保險：
			</td>
			<td style="text-align:left;border:0px white;" width="74%">
				';
		}
			
		/*
		if ($p==1){
			if($input[10]=="是"){
				$head.=' &#9745; 是 &nbsp;&nbsp;&nbsp;&nbsp; &#9744;否<div/>';
			}else{
				$head.=' &#9744; 是 &nbsp;&nbsp;&nbsp;&nbsp; &#9745;否<div/>';
			}
		}else{
			if($input[10]=="是"){
				$head.='&#9745;是 &nbsp;&nbsp;&nbsp;&nbsp; &#9744;否 (非訪視活動者免填)<div/>';
			}else{
				$head.='&#9744;是 &nbsp;&nbsp;&nbsp;&nbsp; &#9745;否 (非訪視活動者免填)<div/>';
			}
			
		}	
		*/
		
		
		if ($p==1){
			if($input[10]=="是"){
				$head.=' <img src="image/checked.png" width="10" height="10">&nbsp;&nbsp;是 &nbsp;&nbsp;<img src="image/checked_empty.png" width="10" height="10">&nbsp;&nbsp;否<div/>';
			}else{
				$head.='  <img src="image/checked_empty.png" width="10" height="10">&nbsp;&nbsp;是 &nbsp;&nbsp;<img src="image/checked.png" width="10" height="10">&nbsp;&nbsp;否<div/>';
			}
		}else{
			if($input[10]=="是"){
				$head.='<img src="image/checked.png" width="10" height="10">&nbsp;&nbsp;是 &nbsp;&nbsp;<img src="image/checked_empty.png" width="10" height="10">&nbsp;&nbsp;否 (非訪視活動者免填)<div/>';
			}else{
				$head.='<img src="image/checked_empty.png" width="10" height="10">&nbsp;&nbsp;是 &nbsp;&nbsp;<img src="image/checked.png" width="10" height="10">&nbsp;&nbsp;否 (非訪視活動者免填)<div/>';
			}
		}	
		
		
		
		
		
		if ($p==1){
			$head.='		
					</td>
				</tr>
			</table>
			<table  style="line-height:12px;" >
				<tr>
					<td style="text-align:left;border:0px white;" width="63%">
						活動參與人次(屬系列活動者，請填列當次訪視場次活動人次)：</td>
					<td style="text-align:left;border:1px white;" width="14%">
						&nbsp;'.$input[11].'
						<hr width="68px">
					</td>
					<td style="text-align:left;border:0px white;" width="17%">
						人
					</td>
					<td style="text-align:left;border:0px white;" width="6%">
						
					</td>
				</tr>';
		}else{
			
			$head.='		
					</td>
				</tr>
			</table>
			<table  style="line-height:12px;" >
				<tr>
					<td style="text-align:left;border:0px white;" width="75%">
						活動參與人次(非活動者免填；屬系列活動者，請填列訪視場次活動人數)：</td>
					<td style="text-align:left;border:1px white;" width="14%">
						&nbsp;'.$input[11].'
						<hr width="68px">
					</td>
					<td style="text-align:left;border:0px white;" width="5%">
						人
					</td>
					<td style="text-align:left;border:0px white;" width="6%">
						
					</td>
				</tr>';
		}
		
		
		
	$head.='</table><b style="font-size:15px;">壹、活動執行情形(必填)：</b><b style="font-size:15px;text-decoration:underline;">若勾有「不符」者，請至質性評述敘明實際執行情形</b>
		
		<div/>
		<div/>
		<table>
			<tr>
				<th colspan="3"  width="33%">
				<b style="line-height:30px;">項目</b>
				</th>
				
				<th width="55%">
					<b style="line-height:30px;">內容</b>
				</th>
				<th width="6%">
					符合
				</th>
				<th width="6%">
					不符
				</th>
			</tr>
				<tr>
					<td style="border-bottom:3 black;border-top:3 black;border-left:3 black;line-height:20px;"  width="5%" rowspan="3" >
						<b>共同項目</b>
					</td>
					<td  style="border-top:3 black;line-height:35px;" width="28%" colspan="2">
						1-1 活動核實性(必填)
					</td>
					<td  style="border-top:3 black;">
						活動依原提報計畫日期或地點辦理，或能於活動前辦理日期或地點變更備查作業。
					</td>
					';
			$in_12="";
			if($input[12]=="true"){
				$in_12='<td style="border-top:3 black;">V</td>
						<td style="border-top:3 black;border-right:3 black"></td>';
			}else if($input[12]=="false"){
				$in_12='<td style="border-top:3 black;"></td>
						<td style="border-top:3 black;border-right:3 black">V</td>';
			}else if($input[12]=="static"){
				$in_12='<td style="border-top:3 black;"></td>
						<td style="border-top:3 black;border-right:3 black"></td>';
			}
				$head=$head.$in_12.'
				</tr>
				<tr>
					<td colspan="2">
						1-2 行銷宣傳性(必填)
					</td>
					<td>
						活動現場可辨識屬體育署「運動i臺灣」年度計畫。
					</td>
					';
					
					$in_13="";
			if($input[13]=="true"){
				$in_13='<td>V</td>
						<td style="black;border-right:3 black"></td>';
			}else if($input[13]=="false"){
				$in_13='<td></td>
						<td style="border-right:3 black">V</td>';
			}else if($input[13]=="static"){
				$in_13='<td></td>
						<td style="border-right:3 black"></td>';
			}
			$head=$head.$in_13.'
				</tr>
				<tr>
					<td style="border-bottom:3 black;line-height:35px;" colspan="2">
						1-3 活動效益性(必填)
					</td>
					<td  style="border-bottom:3 black;">
						活動「參與對象」或「辦理方式」與原核定專案活動一致。
					</td>
					';
					
					$in_14="";
			if($input[14]=="true"){
				$in_14='<td style="border-bottom:3 black;">V</td>
						<td style="border-bottom:3 black;border-right:3 black"></td>';
			}else if($input[14]=="false"){
				$in_14='<td style="border-bottom:3 black;"></td>
						<td style="border-bottom:3 black;border-right:3 black">V</td>';
			}else if($input[14]=="static"){
				$in_14='<td style="border-bottom:3 black;"></td>
						<td style="border-bottom:3 black;border-right:3 black"></td>';
			}	
				$head=$head.$in_14.'
				</tr>';
}else{
			header("Location:select_page.php");
	}
?>

