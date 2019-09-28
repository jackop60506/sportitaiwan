<?php
	/*30 input
	$in_num=1;
	$Ary =$_POST;
	$input=Array();	
	function tf($t){
		
		if($t=="true"){
			return "<td>V</td>
				  <td></td>";
		}else if($t=="false"){
			return "<td></td>
				  <td>V</td>";
		}
	}
		
		foreach($Ary as $b){
			$input[$in_num++]=$b;
		}
		*/
		
		if(isset($_POST["page"]) && isset($_SESSION["loggin"])){
			$table= '
				<tr>
					<td style="line-height:28px;" rowspan="13">
						<b><div></div><div></div>執行項目</b>
					</td>
					<td  rowspan="3" colspan="2">
						<div></div>2-1 推動體育運動志願服務工作
					</td>
					<td>
						志工實際服務體育署運動i臺灣計畫之活動。
					</td>
					'.tf($input[15]).'
				</tr>
				<tr>
					<td>
						志工訓練包含基礎訓練及特殊訓練。
					</td>
					'.tf($input[16]).'
				</tr>
				<tr>
					<td>
						為完成志工訓練並領有志願服務紀錄冊之志工辦理意外事故保險。
					</td>
					'.tf($input[17]).'
				</tr>
				<tr>
					<td line-height:27px; rowspan="10" colspan="2">
						<div></div><div></div><div></div><div></div>2-2 巡迴運動指導團隊
					</td>
					<td>
						主動結合縣內各族群既有通路，直接接觸目標族群。
					</td>
					'.tf($input[18]).'
				</tr>
				<tr>
					<td>
						主動派駐運動指導人力至縣市既有運動場域或活動現場。
					</td>
					'.tf($input[19]).'
				</tr>
				<tr>
					<td>
						提供各執行單位、企業及相關需求單位提出知能講座申請管道。
					</td>
					'.tf($input[20]).'
				</tr>
				<tr>
					<td>
						須組成工作團隊辦理規劃、執行及行政作業。
					</td>
					'.tf($input[21]).'
				</tr>
				<tr>
					<td>
						授課講師需具運動指導能力相關證照。
					</td>
					'.tf($input[22]).'
				</tr>
				<tr>
					<td>
						講授內容以提升民眾運動觀念與知能、激發民眾投入或持續參與運動或針對特定族群設計專屬講座為規劃原則。
					</td>
					'.tf($input[23]).'
				</tr>
				<tr>
					<td>
						以擴大受眾為辦理原則，與運動健身指導班等針對同一團體提供週期性運動指導課程概念不同。
					</td>
					'.tf($input[24]).'
				</tr>
				<tr>
					<td>
						須針對參與人員辦理滿意度調查，並分析其結果。
					</td>
					'.tf($input[25]).'
				</tr>
				<tr>
					<td>
						除正式講座外，建議於課程間或周邊規劃辦理運動相關周邊活動。
					</td>
					'.tf($input[26]).'
				</tr>
				<tr>
					<td>
						建議多元結合縣府資源辦理，以建立持續性推動機制。
					</td>
					'.tf($input[27]).'
				</tr>
								
			</table>
';		}
else{
			header("Location:select_page.php");
	}
?>

