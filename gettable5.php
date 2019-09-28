<?php
	/*26 input
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
		if(isset($_POST['page']) && isset($_SESSION['loggin'])){
			$table='
				<tr>
					<td style="line-height:25px;" rowspan="10">
						<b><div></div><div></div>執行項目</b>
					</td>
					<td colspan="2" rowspan="10">
						2-1 運動熱區
					</td>
					<td>
						運動與活動資訊公開明確，易於取得，形塑縣市運動熱區意象。
					</td>
					'.tf($input[13]).'
				</tr>
				<tr>
					<td>
						透過活動、場域、現有運動及潛在運動人口等多面向之結合，擴增推動效益。。
					</td>
					'.tf($input[14]).'
				</tr>
				<tr>
					<td>
                    運動熱區地點擇定原則：該場域具備合適多元的運動參與設施、交通便利、現有場地運動參與人口數多、戶外與室內運動場地兼具，並以不設立於學校為原則。
                    </td>
					'.tf($input[15]).'
				</tr>
                <tr>
					<td>
						活動規劃以體育運動為主軸，並以增進居民運動參與意願為規劃精神，強調全民參與。
					</td>
					'.tf($input[16]).'
				</tr>
                <tr>
					<td>
						常態性運動指導諮詢服務為必辦項目，相關授課或指導人員以具備運動指導能力相關證照者為限。
					</td>
					'.tf($input[17]).'
				</tr>
                <tr>
					<td>
						建議多元結合縣府資源辦理，以建立持續性推動機制。
					</td>
					'.tf($input[18]).'
				</tr>
                <tr>
					<td>
						熱區活動資訊可透過適當行銷作業傳播予民眾。
					</td>
					'.tf($input[19]).'
				</tr>
                <tr>
					<td>
                    	熱區活動資訊具正確性且即時更新。
                    </td>
					'.tf($input[20]).'
				</tr>
                <tr>
					<td>
                    	針對參與人員辦理滿意度調查，並分析其結果。
                    </td>
					'.tf($input[21]).'
				</tr>
                <tr>
					<td>
                    	建議各縣市政府可整合相關活動於熱區舉辦，以達行銷宣傳之效果。
                    </td>
					'.tf($input[22]).'
				</tr>

			</table>
';	}
else{
			header("Location:select_page.php");
	}
?>

