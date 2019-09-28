<?php
if(isset($_POST["page"]) && isset($_SESSION["loggin"])){
	$needaddinput=8;
	$mid="";
	$anonum="";
	if($fe3==-1 && $fe4==-1){
		$anonum=$in_num-$needaddinput;
		$mid="";
	}
	if($fe3!=-1 && $fe4==-1){
		$anonum=$in_num-($needaddinput+1);		
		$mid='<div style="width:600px">
						<table style="width:100%;">
								<tr>
									<td  >
										<img src="'.$userpath.'/'.$name3.'" height="150" width="200">
									</td>
									<td style="border:0px white;">
										
									</td>
								</tr>
								<tr>
									<td  >
										'.nl2br($input[$anonum+1]).'
									</td>
									<td style="border:0px white;" >
										
									</td>
								</tr>
						</table>
					</div>';
	}
	if($fe3==-1 && $fe4!=-1){
		$anonum=$in_num-($needaddinput+1);
		$mid='<div style="width:600px">
						<table style="width:100%;">
								<tr>
									<td  >
										<img src="'.$userpath.'/'.$name4.'" height="150" width="200">
									</td>
									<td style="border:0px white;">
										
									</td>
								</tr>
								<tr>
									<td  >
										'.nl2br($input[$anonum+1]).'
									</td>
									<td style="border:0px white;" >
										
									</td>
								</tr>
						</table>
					</div>';
	}
	if($fe3!=-1 && $fe4!=-1){
		$anonum=$in_num-($needaddinput+2);
		$mid='
					<div style="width:600px">
						<table style="width:100%;">
								<tr>
									<td  >
										<img src="'.$userpath.'/'.$name3.'" height="150" width="200">
									</td>
									<td  >
										<img src="'.$userpath.'/'.$name4.'" height="150" width="200">
									</td>
								</tr>
								<tr>
									<td>
										'.nl2br($input[$anonum+1]).'
									</td>
									<td>
										'.nl2br($input[$anonum+2]).'
									</td>
				
								</tr>
						</table>
					</div>';
	}
	$bottom='
		<div class="thirdpart">
			<b style="font-size:17px;">質性評述 (皆為必填)</b>
			<div/><div/>
			<b style="font-size:13.5px;">一、	優點特色</b>
			<font style="font-size:10.5px;font-style:italic;">請針對</font>
			<b style="font-size:10.5px;font-style:italic;text-decoration:underline;">共同與執行項目</b>
			<font style="font-size:10.5px;font-style:italic;">中之活動</font>
			<b style="font-size:10.5px;font-style:italic;text-decoration:underline;">優點特色</b>
			<font style="font-size:10.5px;font-style:italic;">撰述</font>
			<div style="line-height:22px">'.nl2br(str_replace("\r\n","<hr/>",$input[$anonum-5])).'</div>
			<div/>
			<b style="font-size:13.5px;">二、	建議評述</b>
			<font style="font-size:10.5px;font-style:italic;">請針對</font>
			<b style="font-size:10.5px;font-style:italic;text-decoration:underline;">共同與執行項目</b>
			<font style="font-size:10.5px;font-style:italic;">中活動</font>
			<b style="font-size:10.5px;font-style:italic;text-decoration:underline;">不符</b>
			<font style="font-size:10.5px;font-style:italic;">或</font>
			<b style="font-size:10.5px;font-style:italic;text-decoration:underline;">待改善</b>
			<font style="font-size:10.5px;font-style:italic;">之建議部分撰述</font>
			<div style="line-height:22px">'.nl2br(str_replace("\r\n","<hr/>",$input[$anonum-4])).'</div>
			<div/>
			<b style="font-size:13.5px;">三、	其他</b>
			
			<font style="font-size:10.5px;font-style:italic;">請依
			<b style="text-decoration:underline;">未包含</b>
			於共同與執行項目中之活動優點或建議撰述(如:活動規劃、行銷包裝、資源
			</font><font style="font-size:10.5px;font-style:italic;">整合等情形)</font>
			<div style="line-height:22px">'.nl2br(str_replace("\r\n","<hr/>",$input[$anonum-3])).'</div>
			<div/>
			<b style="font-size:13.5px;">四、	承辦單位反饋</b>
			<font style="font-size:10.5px;font-style:italic;">請填列執行單位對本計畫、縣市政府或體育署之相關建議</font>
			<div style="line-height:22px">'.nl2br(str_replace("\r\n","<hr/>",$input[$anonum-2])).'</div>
			<div/><div/>
			<b style="font-size:17px;">貳、照片集錦：至少2張，可自行增列表格</b><div/><div/>
			
					
					<div style="width:600px">
						<table style="width:100%;">
								<tr>
									<td  >
									<div/>
										<img src="'.$userpath.'/'.$name1.'" height="150" width="200">
									</td>
									<td  >
									<div/>
										<img src="'.$userpath.'/'.$name2.'" height="150" width="200">
									</td>
									
								</tr>
								<tr>
									<td  >
										'.nl2br($input[$anonum-1]).'
									</td>
									<td  >
										'.nl2br($input[$anonum]).'
									</td>
									
								</tr>
						</table>
					</div>'.$mid.'
				
		<table>
				<tr>
					<td style="" width="40%" rowspan="2">
						<font  style="font-style:italic;">
							感謝委員撥空參與訪視活動，為達到最高效益煩請委員再次確認資料是否正確無遺漏，確認完畢後於右方簽上大名，感謝委員協助。
						</font>
					</td>
					<td  width="60%" style="border:0 white;">
						
					</td>
				</tr>
				<tr>
					
					<td style="border:0 white;" >
						<b style="font-size:20px">訪視委員:______________(簽名)</b>
					</td>
				</tr>
		</table>
		
		</div>
		
	
	</body>
</html>
';/*
&nbsp;&nbsp;&nbsp;<img src="'.$userpath.'/'.$name3.'" height="150" width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.$userpath.'/'.$name4.'" height="150" width="200">
					<div style="width:600px">
						<table style="border:0px white solid;width:100%;">
								<tr>
									<td style="border:0px white;" >
										'.nl2br($input[$in_num-4]).'
									</td>
									<td style="border:0px white;" >
										'.nl2br($input[$in_num-3]).'
									</td>
				
								</tr>
						</table>
					</div>

*/
}else{
			header("Location:select_page.php");
	}
?>

