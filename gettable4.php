<?php
	/*43 input
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
			$table= '
				<tr>
					<td style="line-height:15px;" rowspan="24">
						<b><div></div><div></div>執行項目</b>
					</td>
					<td style="line-height:50px;" rowspan="14">
						<div></div><div></div>2-1 各縣市體育會
					</td>
					<td style="line-height:45px;" rowspan="2">
						<div></div>2-1-1運動健身指導班
					</td>
					<td>
						以2個月為一期程，每周3次每次60分鐘(或每周2次每次90分鐘)，計辦理3期程，每一期程參與人數至少30人。
					</td>
					'.tf($input[15]).'
				</tr>
				<tr>
					<td style="text-align:left;">
						依以下項目，擇一活動類別勾選是否符合:<div/>
						(1.) 職工(青壯年) 活動: 以職工為對象。<div/>
						(2.) 婦女活動: 以婦女(得含配偶)為對象，選擇適當小學閒置空間教室辦理。<div/>
						(3.) 銀髮活動: 以65歲以上銀髮族為對象，選擇老人中心、樂齡中心或長青學苑或社區大學辦理。<div/>
						(4.) 新住民活動: 以外籍配偶(得含眷屬) 為對象。<div/>
						(5.) 運動能力推廣班:擇定一項運動種類進行教學，並核發研習結業證明。
					</td>
					'.tf($input[16]).'
				</tr>
				<tr>
					<td  rowspan="2">
						<div></div>2-1-2上班族運動休閒活動
					</td>
					<td>
						辦理趣味運動競賽、球類競賽或其他提高個人體適能運動休閒活動。
					</td>
					'.tf($input[17]).'
				</tr>
				<tr>
					<td>
						每縣市至多辦理3場次，每場次300人以上(偏鄉離島150人以上)。
					</td>
					'.tf($input[18]).'
				</tr>
				<tr>
					<td  rowspan="2">
						2-1-3登山、健行、慢跑活動
					</td>
					<td>
						縣市體育會主辦，鼓勵跨域加值、異業整合。
					</td>
					'.tf($input[19]).'
				</tr>
				<tr>
					<td>
						每縣市至少1梯次，至少300人(偏鄉離島150人)。
					</td>
					'.tf($input[20]).'
				</tr>
				<tr>
					<td style="line-height:18px;" rowspan="3">
						2-1-4團體及綜合性體育展演活動
					</td>
					<td>
						擇一種類團體性趣味運動競賽，或集結數種類辦理年度觀摩表演與成果交流聯誼活動之整合性展演嘉年華會。
					</td>
					'.tf($input[21]).'
				</tr>
				<tr>
					<td>
						避免集中單一鄉鎮市區、各級學校及各單項委員會。
					</td>
					'.tf($input[22]).'
				</tr>
				<tr>
					<td>
						每縣市至少辦理4梯次，每梯次總參與人數至少250人。
					</td>
					'.tf($input[23]).'
				</tr>
				<tr>
					<td style="line-height:25px;" >
						2-1-5體育嘉年華活動
					</td>
					<td>
						集結「運動i臺灣」執行單位及體育運動團體，辦理1場次至少2000人實際參與之年度大型觀摩表演或展演競賽活動。
					</td>
					'.tf($input[24]).'
				</tr>
				<tr>
					<td  style="line-height:23px;"	rowspan="4">
						<div></div>2-1-6聘請短期人力協助推動計畫
					</td>
					<td>
						具下列條件之一：103、104、105年已報經體育署核定受聘者；國內外大專校院體育相關科系畢業者；各級學校專任運動教練審定合格或初、中高級國民體能指導員、國民體能檢測員、或各級教練證、運動傷害防護員證。
					</td>
					'.tf($input[25]).'
				</tr>
				<tr>
					<td>
						106年新聘用者應依公開程序遴聘人員。
					</td>
				'.tf($input[26]).'
				</tr>
				<tr>
					<td>
						工作內容包含執行計畫各項工作事務、掌握計畫各項活動調整與變更，並隨時更新運動地圖網頁、其他計畫相關交辦事項。
					</td>
					'.tf($input[27]).'
				</tr>
				<tr>
					<td>
						應落實受聘人員差勤管理。
					</td>
					'.tf($input[28]).'
				</tr>
				<tr>
					<td style="line-height:25px;" rowspan="2" colspan="2">
						2-2 鄉鎮市區體育會-鄉鎮市區運動嘉年華
					</td>
					<td>
						團體性、趣味性、普及性、綜合性之全民運動嘉年華。
					</td>
					'.tf($input[29]).'
				</tr>
				<tr>
					<td>
						每場活動項目至少包括3項運動種類。
					</td>
					'.tf($input[30]).'
				</tr>
				<tr >
					<td rowspan="8" colspan="2">
						<div></div><div></div><div></div><div></div><div></div>2-3 社區聯誼賽
					</td>
					<td>
						趣味化、涵蓋各年齡層之分組、創意活動內容，結合地方特色、觀光產業、地方企業等。
					</td>
					'.tf($input[31]).'
				</tr>
				<tr>
					<td>
						105年度必辦一項運動項目，並得選辦另一項運動項目。各縣市政府所選賽事項目與分組須與鄉鎮市區統一。
					</td>
					'.tf($input[32]).'
				</tr>
				<tr>
					<td>
						除正規比賽外需辦理入門難度低之趣味競賽體驗活動(趣味競賽體驗營)，至少100人參與。
					</td>
					'.tf($input[33]).'
				</tr>
				<tr>
					<td>
						分級制：先行辦理各鄉鎮市區層級賽事，各區前幾名晉級參與縣市層級賽事。
					</td>
					'.tf($input[34]).'
				</tr>
				<tr>
					<td>
						分組：本賽事活動全部皆以團體方式進行，比賽分組朝向趣味化、不同年齡層、不同性別搭配等多元方式。
					</td>
					'.tf($input[35]).'
				</tr>
				<tr>
					<td>
						於報名表中以問卷方式調查參與者對社區聯誼賽之滿意度、未來想參與之項目等，作為隔年度辦理參考。
					</td>
					'.tf($input[36]).'
				</tr>
				<tr>
					<td style="text-align:left;">
						擇一活動層級勾選是否符合:<div/>
						(1.) 鄉鎮市區層級社區聯誼賽比賽報名人數至少250人，未達者得合併鄰近鄉鎮市區辦理。<div/>
						(2.) 縣市層級社區聯誼賽參與人數須達500人以上，辦理項目需與鄉鎮市區相同，且由鄉鎮市區優勝隊伍優先參與。
					</td>
					'.tf($input[37]).'
				</tr>
				
			</table>
';	}
else{
			header("Location:select_page.php");
	}
?>

