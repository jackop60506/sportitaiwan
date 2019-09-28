<?php
	/*61 input
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
			$table='
				<tr>
					<td style="line-height:20px;" rowspan="48">
						<b><div></div><div></div>執行項目</b>
					</td>
					<td style="line-height:15px;" rowspan="10">
						<div></div><div></div><div></div><div></div>2-1
水域運動
					</td>
					<td style="line-height:25px;" rowspan="3">
						2-1-1水域自救觀摩與宣導

					</td>
					
					<td >
						協同相關局處辦理聯合記者會，或發布水安新聞稿。
					</td>
					'.tf($input[15]).'
				</tr>
				
				
				<tr>
					<td >
						結合消防海巡、救生團體辦理講座或觀摩會，對象應包含社區民眾。
					</td>
					'.tf($input[16]).'
				</tr>
				<tr>
					<td >
						水中活動學員與教練比例以15比1為原則。
					</td>
					'.tf($input[17]).'
				</tr>
				
				<tr>
					<td style="line-height:25px;" rowspan="2">
						2-1-2水域活動體驗營

					</td>
					<td >
						以新住民、女性或銀髮族群為目標對象(家庭、親子)。
					</td>
					'.tf($input[18]).'
				</tr>
				<tr>
					<td >
						體驗活動以無動力水域運動為主。
					</td>
					'.tf($input[19]).'
				</tr>	
				<tr>
					<td style="line-height:25px;" rowspan="2">
						2-1-3水上運動嘉年華
					</td>
					<td>
						鼓勵各級學校、機關企業、社會團體組隊參加。
					</td>
					'.tf($input[20]).'
				</tr>
				<tr>
					<td >
						可擇一規劃：水上展演會(水上運動展示及水陸體驗活動等)、救生技能趣味賽(救生水上漂、水域救生等競賽及闖關活動)。
					</td>
					'.tf($input[21]).'
				</tr>
				<tr >
					<td style="line-height:20px;" rowspan="2">
						2-1-4防溺宣導品
					</td>
					<td >
						宣傳多元水域環境，提醒防溺自救安全觀念。
					</td>
					'.tf($input[22]).'
				</tr>
				<tr >
					<td >
						設計製作在地化宣導品。
					</td>
					'.tf($input[23]).'
				</tr>
				<tr >
					<td style="line-height:15px;" >
						2-1-5端午龍舟競賽

					</td>
					<td >
						規劃民眾體驗區。

					</td>
					'.tf($input[24]).'
				</tr>
				<tr >
					<td style="line-height:16px;"  rowspan="13">
						<div></div><div></div><div></div>2-2 單車運動
					</td>
					<td style="line-height:27px;" rowspan="6">
						<div></div>2-2-1單車成年禮100公里
					</td>
						<td >
						參加人數參考該縣市所在地高中職學生人數五分之一以上。
					</td>
					'.tf($input[25]).'
				</tr>
				
				<tr >
					<td >
						參與對象為16-18歲青少年為主。
					</td>
					'.tf($input[26]).'
				</tr>
				<tr >
					<td >
						參加學員需全程參加行前安全講習會。
					</td>
				'.tf($input[27]).'
				</tr>
				<tr >
					<td >
						工作人員與學員比至少1:10。
					</td>
					'.tf($input[28]).'
				</tr>
				<tr >
					<td >
						各縣市政府於轄內舉辦2場具特色之80公里路線。
					</td>
					'.tf($input[29]).'
				</tr>
				<tr >
					<td >
						原則於體育署7-9月單車運動季辦理。
					</td>
					'.tf($input[30]).'
				</tr>
				<tr >
					<td style="line-height:18px;" rowspan="3">
						<div></div>2-2-2 單車快樂遊
					</td>
					<td >
						參加學員需全程參加行前安全講習會。
					</td>
					'.tf($input[31]).'
				</tr>
				<tr >
					<td >
						每縣市至少2場【其中至少1場於104年十大自行車經典路線共18條或於各縣市所屬自行車道辦理】，每梯次至少150人以上。
					</td>
					'.tf($input[32]).'
				</tr>
				<tr >
					<td >
						工作人員與學員比至少1:10。
					</td>
					'.tf($input[33]).'
				</tr>
				<tr >
					<td style="line-height:18px;" rowspan="4">
						<div></div>2-2-3 單車育樂營
					</td>
					<td >
						至少辦理2場，每場20-30人次。
					</td>
					'.tf($input[34]).'
				</tr>
				<tr >
					<td >
						活動天數3-5天(總時數12小時)。
					</td>
					'.tf($input[35]).'
				</tr>
				<tr >
					<td >
						課程內容包含安全騎乘教育、行前檢查、基本保養與維修、基本傷害防護、自我體能訓練及騎乘體驗(至少15公里)等。
					</td >
					'.tf($input[36]).'
					
				</tr>
				<tr >
					<td >
						工作人員與學員比至少1:10。
					</td>
					'.tf($input[37]).'
				</tr>
				<tr >
					<td style="line-height:23px;"  rowspan="9">
						<div></div><div></div>2-3 原住民族傳統運動

					</td>
					<td rowspan="2">
						2-3-1 原住民族鄉鎮市區綜合運動會
					</td>
					<td >
						以原住民為參賽對象。
					</td>
					'.tf($input[38]).'
				</tr>
				<tr >
					<td >
						至少3種原住民族傳統運動競賽。
					</td>
					'.tf($input[39]).'
				</tr>
				<tr >
					<td rowspan="3">
						2-3-2原住民族傳統地方特色體育活動
					</td>
					<td >
						辦理原民族全單一種類傳統特色體育展演、活動或研習推廣為主。
					</td>
					'.tf($input[40]).'
				</tr>
				<tr >
					<td >
						活動時間以1天為原則。
					</td>
					'.tf($input[41]).'
				</tr>
				<tr >
					<td >
						參加人員具有原住民身分者應達60%以上。
					</td>
					'.tf($input[42]).'
				</tr>
				
				<tr >
					<td rowspan="4">
						<div></div>2-3-3原住民族傳統運動樂活營
					</td>
					<td >
						以推廣、樂趣化為原則。
					</td>
					'.tf($input[43]).'
				</tr>
				<tr >
					<td >
						運動課程以原住民傳統特色運動為限。
					</td>
					'.tf($input[44]).'
				</tr>
				<tr >
					<td >
						於暑假期間辦理，每梯次至少5天，且參加人數至少30人(運動種類如有特殊性，得酌以調減人數)。
					</td>
					'.tf($input[45]).'
				</tr>
				<tr >
					<td >
						參加人員具有原住民族身分者應達60%以上。
					</td>
					'.tf($input[46]).'
				</tr>
				<tr >
					<td  style="line-height:23px;" rowspan="16">
						<div></div><div></div><div></div><div></div>2-4 身心障礙者運動
					</td>
					<td  style="line-height:19px;"  rowspan="2">
						2-4-1 身心障礙運動大集合、體驗營或單項運動比賽
					</td>
					<td >
						活動性質不得屬郊遊、露營、學校戶外教學。
					</td>
					'.tf($input[47]).'
				</tr>
				<tr >
					<td style="text-align:left;">
					
						依以下項目，擇一活動類別勾選是否符合:<div/>
						(1.) 運動大集合：須包含2種以上身心障礙類別。<div/>
						(2.) 體驗營：常態性(每週至少1次)，每梯次至少20-30人<div/>
						(3.) 比賽活動：以1天為原則，每梯次至少60-80人參加
					</td>
						'.tf($input[48]).'
				</tr>
				<tr >
					<td style="line-height:23px;" rowspan="5">
						<div></div>2-4-2身心障礙運動推動觀摩(研習)會
					</td>
					<td >
						每一研習會時間至少2天。
					</td>
					'.tf($input[49]).'
				</tr>
				<tr >
					<td >
						結合縣市身心障礙運動會或單項運動比賽，辦理研習人員實習。
					</td>
					'.tf($input[50]).'
				</tr>
				<tr >
					<td >
						每梯次參加人數應有30-40人以上。
					</td>
					'.tf($input[51]).'
				</tr>
				<tr >
					<td >
						承辦單位須申請學習時數認可作業。
					</td>
					'.tf($input[52]).'
				</tr>
				<tr >
					<td >
						研習內容：各運動種類裁判、教練、指導員研習或體位分級認知研習會。
					</td>
					'.tf($input[53]).'
				</tr>
				<tr >
					<td rowspan="2">
						2-4-3身心障礙綜合性運動會
					</td>
					<td >
						至少有4種身心障礙運動種類。
					</td>
					'.tf($input[54]).'
				</tr>
				<tr >
					<td >
						規劃含2種以上障礙類別者參與。
					</td>
					'.tf($input[55]).'
				</tr>
				<tr >
					<td style="line-height:18px;" rowspan="4">
						<div></div>2-4-4身心障礙運動活力養成班
					</td>
					<td >
						鼓勵各縣市政府善用所屬公有室內閒置空間，提供身心障礙者(含銀髮族)專屬簡易休閒運動場地，以辦理常態性運動養成班。
					</td>
					'.tf($input[56]).'
				</tr>
				<tr >
					<td >
						以室內空間約40坪為主，得酌以調整坪數。
					</td>
					'.tf($input[57]).'
				</tr>
				<tr >
					<td >
						應將各該場所訊息納入各縣市政府網站之運動地圖。
					</td>
					'.tf($input[58]).'
				</tr>
				<tr >
					<td >
						每周至少1次60至90分鐘，期程至少6個月。
					</td>
					'.tf($input[59]).'
				</tr>
				<tr >
					<td style="line-height:19px;" rowspan="3">
						2-4-5身心障礙福利機構游泳(樂活)活動
					</td>
					<td >
						與學校或游泳池機構合作辦理游泳體驗營，辦理時間至少規劃5天為一期，每班身心障礙者至少8人。
					</td>
					'.tf($input[60]).'
				</tr>
				<tr >
					<td >
						助理教練及身心障礙學員比，原則應達1:3。
					</td>
					'.tf($input[61]).'
				</tr>
				<tr >
					<td >
						游泳池應配有合格救生員，教練至少有一位具有身心障礙游泳教學經驗。
					</td>
					'.tf($input[62]).'
				</tr>
				
			</table>
';	}
else{
			header("Location:select_page.php");
	}
			
?>

