<?php
	/*28 input
	$in_num=1;
	$Ary =$_POST;
	$input=Array();	
	function tf($t){
		
		if($t=='true'){
			return '<td>V</td>
				  <td></td>';
		}else if($t=='false'){
			return '<td></td>
				  <td>V</td>';
		}
	}
		
		foreach($Ary as $b){
			$input[$in_num++]=$b;
		}
		*/
if(isset($_POST["page"]) && isset($_SESSION["loggin"])){
			$table= '
				<tr>
					<td style="line-height:20px;" rowspan="12">
						<b><div></div><div></div><div></div>執行項目</b>
					</td>
					<td style="line-height:30px;"colspan="2" rowspan="3">
					<div></div>
						2-1 地方特色運動
					</td>
					<td>
						結合觀光、地方文化。
					</td>
					'.tf($input[15]).'
				</tr>
			
				<tr>
					<td>
						具延續性之大型體育活動(至少5000人以上；偏鄉離島得專案辦理)。
					</td>
					'.tf($input[16]).'
				</tr>
				<tr>
					<td>
						至少符合下列其中一項地方特色定義：特殊人文傳統文化、活動歷史悠久、結合特殊自然地理環境、結合文化創新概念、結合縣市節慶辦理運動體驗活動。
					</td>
					'.tf($input[17]).'
				</tr>
				<tr>
					<td style="line-height:30px;" rowspan="5">
					<div></div>
						2-2
國民體育日多元體育活動

					</td>
					<td  >
						2-2-1
縣市層級體育表揚活動

					</td>
					<td >
						應透過公益廣宣平台及結合既有整體行銷管道廣為宣導。
					</td>
					'.tf($input[18]).'
				</tr>
				<tr>
					<td style="line-height:30px;" rowspan="4">
					<div></div>
						2-2-2
多元體育活動

					</td>
					<td >
						活動內容以體育運動為主軸(得加入或融合文化、觀光、藝文或策展等周邊活動)。
					</td>
					'.tf($input[19]).'
				</tr>
				
				<tr>
					<td >
						活動以1日以上之大型系列活動及非高度競技性質為辦理原則。
					</td>
					'.tf($input[20]).'
				</tr>
				<tr>
					<td >
						須結合縣市全民運動推展理念及既有資源，並以可延續於各年國民體育日辦理者為規劃方向。
					</td>
					'.tf($input[21]).'
				</tr>
				<tr>
					<td >
						應透過公益廣宣平台及結合既有整體行銷管道廣為宣導。
					</td>
					'.tf($input[22]).'
				</tr>
				<tr>
					<td  style="line-height:25px;" colspan="2" rowspan="4">
					<div></div>
						2-3 競爭型年度計畫
					</td>
					<td >
						直接與目標族群進行互動。
					</td>
					'.tf($input[23]).'
				</tr>
				<tr>
					<td >
						結合縣市既有資源(行政、經費、行銷、政策等)。
					</td>
					'.tf($input[24]).'
				</tr>
				<tr>
					<td >
						結合現有相關計畫(如體適能檢測、運動知能提升)及銀髮、性平概念。
					</td>
					'.tf($input[25]).'
				</tr>
				<tr>
				
					<td >
						避免計畫推動過度集中部分鄉鎮區。
					</td>
					'.tf($input[26]).'
				</tr>
			</table>
';	}
else{
			header("Location:select_page.php");
	}
	
?>

