<?php
	header("Content-type:text/html;charset=utf8");
	session_start();
	require_once("sql_user.php");
	if(isset($_GET['filestatus'])){
		if($_GET['filestatus']=='ok'){
			echo '表單傳輸成功'."</br>";
		}
		
	}
	if(isset($_GET['page']) && isset($_GET['form_num'])){
		$page=$_GET['page'];
		//資料庫讀寫
		
		$conn= new PDO("mysql:host=localhost;dbname=sportitaiwan;",userid,userpassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$setnames=$conn->prepare("SET NAMES UTF8");
		$setnames->execute();
		//分頁取得結果
		$num_t=$_GET['form_num'];
		$stmt= $conn->prepare("SELECT * FROM event_to_form WHERE event_num=:num_t");
		$stmt->bindParam(':num_t',$num_t);
		$stmt->execute();
		$r = $stmt->fetchALL();	
		$userpath='D:/xamp/upload/'.$_SESSION['userid']."/".$num_t;
		if(glob($userpath.'/recover.json')){
			$recover=file_get_contents($userpath.'/recover.json');
		}else{
			$recover='false';
		}
	}else
	{
		header("Location:second.php");
	}
	
	function page_select($this){
		
		switch($this){
			/*
			case 0:echo "選表格
					<form action='select_page.php' method='post'>
							<select name='page'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
							</select>
							<input type='submit' value='請選擇表單'>
					</form>
			";break;
			*/
			case 1:require_once('D:\xamp\webpart\table1.html');break;
			case 2:require_once('D:\xamp\webpart\table2.html');break;
			case 3:require_once('D:\xamp\webpart\table3.html');break;
			case 4:require_once('D:\xamp\webpart\table4.html');break;
			case 5:require_once('D:\xamp\webpart\table5.html');break;
		}
	}
?>
<!DOCTYPE html>
			<html>
				<head>
					<meta http-equiv='Content-Type' Content='text/html' charset='utf-8'/>
					<title>運動i台灣</title>
					<script src='jquery.min.js'></script>
					<style>
						
					.bgfixed{
						position:fixed;
						background-image:url('image/background.png');
						width:100%;
						height:100%;
						margin-top:-60px;
						background-repeat:no-repeat;
						z-index:-2;
					}
						body,th,td{
							font-family:微軟正黑體;
							margin: 0 0;
							
												
						}
	
						.table1{
								z-index:80;
								position:static;
								box-shadow: 10px 10px 5px rgba(0,0,0,0.3);
								border:1px gray solid;
								border-radius: 8px;
								width:900px;
								margin :auto;
								margin-top:60px;
								background-color:white;
								padding: 1%;
								
							}
							td,th{
								border:1px black solid;
								word-break: break-all;
								text-align:center;
								background-color:white;
							}
							td{
								height:30px;
							}
							th{
								height:40px;
							}
							
							
							
							input[type='radio']{
								cursor:pointer;
							}
							td:hover{
								background-color:rgb(225,225,225);
							}
							th:hover{
								background-color:rgb(225,225,225);
							}
							.prev:visited,.prev:link {
								color:white;
							}
							textarea{
								resize:none;
							}
							.piclook:visited{
								
								color:red;
							}
							.piclook{
								font-weight:bold;
								font-size:20px;
							}
					</style>
					<script>
					$(document).ready(function(){
						var pic4exist=false;
						var wherther4to3=false;
						var wherther4to3tag=0;
						var addpic =function(){
							
							if(($("textarea").length)>7){
									alert("最多只能上傳四張");
								}
								if(($("textarea").length==7)&& (pic4exist==false)){
									$(".thirdpart").append('<div id="pic_4"><br><hr size="1px" width="900px"><div id="btnp4" style="margin-left:820px;cursor:pointer;text-align:center;font-family:微軟正黑體;font-size:45px;width:60px;height:60px;border-radius:99em;background-color:rgba(0,0,0,0.2);">X</div>額外上傳圖區<div/><input type="file" name="p4" ><div/>輸入此圖的說明<div/><textarea style="width:500px; height:100px;" name="p4_text">請輸入說明</textarea></div>');
									pic4exist=true;
								}else if(($("textarea").length==7)&& (pic4exist==true)){
									$(".thirdpart").append('<div id="pic_3"><br><hr size="1px" width="900px"><div id="btnp3" style="margin-left:820px;cursor:pointer;text-align:center;font-family:微軟正黑體;font-size:45px;width:60px;height:60px;border-radius:99em;background-color:rgba(0,0,0,0.2);">X</div>額外上傳圖區<div/><input type="file" name="p3" ><div/>輸入此圖的說明<div/><textarea style="width:500px; height:100px;" name="p3_text">請輸入說明</textarea></div>');									
								}
								
								if(($("textarea").length==6)&& (pic4exist==false)){
									$(".thirdpart").append('<div id="pic_3"><br><hr size="1px" width="900px"><div id="btnp3" style="margin-left:820px;cursor:pointer;text-align:center;font-family:微軟正黑體;font-size:45px;width:60px;height:60px;border-radius:99em;background-color:rgba(0,0,0,0.2);">X</div>額外上傳圖區<div/><input type="file" name="p3" ><div/>輸入此圖的說明<div/><textarea style="width:500px; height:100px;" name="p3_text">請輸入說明</textarea></div>');
								}
								
						}
						
						//卡在不知道為何表格錯
						var input_recover=function(){
							var recover=<?php echo $recover;?>;
							var page_number=<?php echo $page;?>;
							var selected=true;
							if(recover!=false){
								var year=parseInt(recover.date.date_y),
								month=parseInt(recover.date.date_m),
								day=parseInt(recover.date.date_d),
								in1=recover.city,in2=recover.location,in3=recover.host,in4=recover.activity_name,in5=recover.host_down,
								insurance=recover.insurance=='否'?7:6,visit_people=recover.visit_people,
								first_part=recover.first_part,second_part=recover.second_part,
								third_part=recover.third_part,picture=recover.picture,dates_day=recover.dates_day;
								
								
								$("#year").val(year);$("#month").val(month);$("#day").val(day);
								$("#dates_day").html(dates_day);
							
								
								$("input[name='wherego_city']").val(in1);$("input[name='process_place']").val(in2);
								$("input[name='manger']").val(in3);$("input[name='manger_down']").val(in5);$("input[name='activity_name']").val(in4);
								$("input").get(insurance).checked=true;$("input[name='activity_people']").val(visit_people);
								
								
								var i=0;
								var q=0;
								while(i<first_part.length){
									
									
									
									
									if(page_number=="2" && i==36 && selected==true){
											
											$("#2-4-1-13_select").val(first_part[i]);
											selected=false;
											q=q+1;
											continue;
									}
									if(page_number=="4" && i==4 && selected==true){
											
											$("#2-1-15_select").val(first_part[i]);
											selected=false;
											q=q+1;
											continue;
									}
									if(page_number=="4" && i==first_part.length-1){
											
											$("#2-3-12_select").val(first_part[i]);
											break;
									}
									switch(first_part[q+i]){
										case 'true':$("input").get(9+i*3).checked=true;break;
										case 'false':$("input").get(10+i*3).checked=true;break;
										case 'static':$("input").get(11+i*3).checked=true;break;
									}
									i++;
								}
								
							
								
								for(var ii=0;ii<second_part.length;ii++){	
										$("textarea").get(ii).value=second_part[ii];
								}
								$("<div><b style='color:red;'>圖1已成功保存</b></br></br><b>照片名稱: </b>"+picture[0]+"  <a style='color:red;' class='piclook' target='_blank' href='userviewpic.php?form_num="+<?php echo $num_t;?>+"&picn="+<?php echo 1;?>+"'>點此檢視照片</a></div><div>--------------------------------------------------------</div><font>(若想更新此照片，請點下方<b>選擇檔案</b>上傳新照片後<b>再提交表單</b>，便會更新)</font></br>").insertBefore($("input[name='p1']"));   
								$("<div><b style='color:red;'>圖2已成功保存</b></br></br><b>照片名稱: </b>"+picture[1]+"  <a style='color:red;' class='piclook' target='_blank' href='userviewpic.php?form_num="+<?php echo $num_t;?>+"&picn="+<?php echo 2;?>+"'>點此檢視照片</a></div><div>--------------------------------------------------------</div><font>(若想更新此照片，請點下方<b>選擇檔案</b>上傳新照片後<b>再提交表單</b>，便會更新)</font></br>").insertBefore($("input[name='p2']"));   

																
								$("input[name='picstate1']").attr("value","exist");
								$("input[name='picstate2']").attr("value","exist");
								
								$("textarea[name='p1_text']").val(third_part[0]);
								$("textarea[name='p2_text']").val(third_part[1]);
								if(third_part.length==3){
									addpic();
									$("<div><b><b style='color:red;'>圖片已成功保存</b></br></br><b>照片名稱: </b>"+picture[2]+"  <a style='color:red;' class='piclook' target='_blank' href='userviewpic.php?form_num="+<?php echo $num_t;?>+"&picn="+<?php echo 3;?>+"'>點此檢視照片</a></div><div>--------------------------------------------------------</div><font>(若想更新此照片，請點下方<b>選擇檔案</b>上傳新照片後<b>再提交表單</b>，便會更新)</font></br>").insertBefore($("input[name='p3']"));   
									
															
									$("input[name='picstate3']").attr("value","exist");																	
									$("textarea[name='p3_text']").val(third_part[2]);
									
								}
								if(third_part.length==4){
																											
									addpic();addpic();
									$("<div><b style='color:red;'>圖片已成功保存</b></br></br><b>照片名稱: </b>"+picture[2]+"  <a style='color:red;' class='piclook' target='_blank' href='userviewpic.php?form_num="+<?php echo $num_t;?>+"&picn="+<?php echo 3;?>+"'>點此檢視照片</a></div><div>--------------------------------------------------------</div><font>(若想更新此照片，請點下方<b>選擇檔案</b>上傳新照片後<b>再提交表單</b>，便會更新)</font></br>").insertBefore($("input[name='p3']"));   
									$("<div><b style='color:red;'>圖片已成功保存</b></br></br><b>照片名稱: </b>"+picture[3]+"  <a style='color:red;' class='piclook' target='_blank' href='userviewpic.php?form_num="+<?php echo $num_t;?>+"&picn="+<?php echo 4;?>+"'>點此檢視照片</a></div><div>--------------------------------------------------------</div><font>(若想更新此照片，請點下方<b>選擇檔案</b>上傳新照片後<b>再提交表單</b>，便會更新)</font></br>").insertBefore($("input[name='p4']"));   

									
									
									$("input[name='picstate3']").attr("value","exist");
									$("input[name='picstate4']").attr("value","exist");

									$("textarea[name='p3_text']").val(third_part[2]);
									$("textarea[name='p4_text']").val(third_part[3]);
								}
							}
						}
						input_recover();
						var first_part_alert=function(){
							tag=true;
							
								for(var i=11;i<=19;i+=3){	
									if($("input").get(i).checked==true){
										tag=false;
										break;
									}
								}
							if(tag==true){
								alert("接著請按照訪視活動填寫");
							}
						}
						
							$(document).on('click',"input[name=1-1]",function(){
								first_part_alert();
							});
							$(document).on('click',"input[name=1-2]",function(){
								first_part_alert();
							});
							$(document).on('click',"input[name=1-3]",function(){
								first_part_alert();
							});
							
						
						var input_test=function(){
								var page_number=<?php echo $page?>;
								var post_test=true;
								var input_num=$("input").size()-1,
								 in1=$("input[name='wherego_city']").val(),
								 in2=$("input[name='process_place']").val(),
								 in3=$("input[name='manger']").val(),
								 in4=$("input[name='activity_name']").val(),
								 in5=$("#manger_down").val(),
								 in2_1=$("textarea").get(0).value,
								 in2_2=$("textarea").get(1).value,	
								 in2_3=$("textarea").get(2).value,
								 in2_4=$("textarea").get(3).value,
								 f1=$("input[type=file]").get(0).value,
								 f2=$("input[type=file]").get(1).value,
								 f1_state=$("input[name='picstate1']").val(),
								 f2_state=$("input[name='picstate2']").val(),
								 f3_state=$("input[name='picstate3']").val(),
								 f4_state=$("input[name='picstate4']").val(),
								 error_message='';
								
						//4條input+辦保險
								
								
									if(in1==''||in2==''||in3==''||in4==''||in5==''){
										error_message='訪視縣市 辦理地點 主辦單位 承辦單位 活動全名 其中之一未填';
										post_test=false;
									}								
								if(($("input").get(6).checked==false)&&($("input").get(7).checked==false)){
									
									error_message+="\n---------------\n是否辦理保險未填";
									post_test=false;
								}	
						//壹
								//for(var i=8;i<=input_num-4;i+=3){
									
								  for(var i=11;i<=19;i+=3){	
									if($("input").get(i).checked==true){
										error_message+="\n---------------\n壹、活動執行情形中共同項目 未填寫完成";
										post_test=false;
										break;
									}
								}
								
						//貳
							
								if(in2_1==''||in2_2==''||in2_3==''||in2_4==''){
									error_message+="\n---------------\n質性評述部分未填寫完成";
									post_test=false;
								}
						//參
						
							
								var f3=($("#pic_3").length>0)?$("input[type=file]").get(2).value:-1;
								var f4=($("#pic_4").length>0)?$("input[type=file]").get(3).value:-1;
								
								if(f1==''||f2==''){
									if(f1_state=="not_exist" || f2_state=="not_exist"){
									error_message+="\n---------------\n貳、照片集錦未選相片（如果不需要額外上傳圖區，請點擊右上Ｘ符號取消該額外上傳圖區）";
									
									post_test=false;
									}
								}
									if((f3!=-1) && (f4!=-1)){
										
											if(f3==''||f4==''){
												if(f3_state=="not_exist" || f4_state=="not_exist"){
													error_message+="\n---------------\n貳、照片集錦未選相片（如果不需要額外上傳圖區，請點擊右上Ｘ符號取消該額外上傳圖區）";
													post_test=false;
												}
											}
										
									}
									else if((f3==-1) && (f4!=-1)){
										if(f4==''){
											if(f4_state=="not_exist"){
											error_message+="\n---------------\n貳、照片集錦未選相片（如果不需要額外上傳圖區，請點擊右上Ｘ符號取消該額外上傳圖區）";
											post_test=false;
											}
										}
									}
									else if((f3!=-1) && (f4==-1)){
										
										if(f3==''){
											if(f3_state=="not_exist"){
											error_message+="\n---------------\n貳、照片集錦未選相片（如果不需要額外上傳圖區，請點擊右上Ｘ符號取消該額外上傳圖區）";
											post_test=false;
											}
										}
									}
								
							
								var re = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
							if(f1_state=="upload"){
								if(!re.exec(f1))
								{
									error_message+="\n---------------\n貳、上傳的圖片格式請符合 jpg丶jpeg丶bmp丶gif丶png 格式";
									post_test=false;
								}
							}
							if(f2_state=="upload"){
								if(!re.exec(f2))
								{
									error_message+="\n---------------\n貳、上傳的圖片格式請符合 jpg丶jpeg丶bmp丶gif丶png 格式";
									post_test=false;
								}
							}
							
						
							if((f3!=-1) && (f4!=-1)){
									if(f3_state=="upload" && f4_state=="upload" ){
										if(!re.exec(f3) || !re.exec(f4)){
											error_message+="\n---------------\n貳、上傳的圖片格式請符合 jpg丶jpeg丶bmp丶gif丶png 格式";
											post_test=false;
										}
									}
							}
							if((f3!=-1) && (f4==-1)){
								if(f3_state=="upload" && f4_state!="upload" ){
									
										if(!re.exec(f3)){
											error_message+="\n---------------\n貳、上傳的圖片格式請符合 jpg丶jpeg丶bmp丶gif丶png 格式";
											post_test=false;
										}
									}
							}	
							if((f3!=-1) && (f4==-1)){
								if(f3_state!="upload" && f4_state=="upload" ){
									
										if(!re.exec(f4)){
											error_message+="\n---------------\n貳、上傳的圖片格式請符合 jpg丶jpeg丶bmp丶gif丶png 格式";
											post_test=false;
										}
									}
							}
								
								
								
						//參 圖片說明
							if($("textarea[name='p1_text']").val()==''){
								$("textarea[name='p1_text']").val("無");
							}
							if($("textarea[name='p2_text']").val()==''){
								$("textarea[name='p2_text']").val("無");
							}	
							if($("textarea[name='p3_text']").val()==''){
								$("textarea[name='p3_text']").val("無");
							}	
							if($("textarea[name='p4_text']").val()==''){
								$("textarea[name='p4_text']").val("無");
							}	
							
							if($("input[name='activity_people']").val()==''){
								$("input[name='activity_people']").val("無");
							}
							
							if(post_test==true){
								var nameWhethernot=confirm("請問此表單是否要匿名? ('要'  按確認，'不要'  按取消)");
								if(nameWhethernot== true){
									
									$("input[name=noname_whether]").attr('value','yes');
								}else{
									$("input[name=noname_whether]").attr('value','no');
									
								}
									var fin_tf=confirm("資料已確認無誤 確定送出?");
									
								
									if(fin_tf == true){
										$("input[type=submit]").attr('disabled','disabled');
										return true;
									}else{
										 return false;
									}
									$("input[type=submit]").attr('disabled','disabled');
									 return true;
								
							
							}else{
								
								alert(error_message);
								  return false;
							}
						}
						

						$("form").on('submit',function(){
														
							return input_test();
										
						});
						
						$("#addpic").on('click',function(){
								
								addpic();
						
						});
						$(document).on('click',"#btnp4",function(){
							var fin_tf=confirm("確定要刪除此列?");
								if(fin_tf == true){
									$("#pic_4").remove();
									$("input[name='picstate4']").attr("value","not_exist");
									pic4exist=false;
								}else{
									 return false;
								}
							
								
						});
						$(document).on('click',"#btnp3",function(){
							var fin_tf=confirm("確定要刪除此列?");
								if(fin_tf == true){
									if(pic4exist==true){
										wherther4to3tag++;
										if(wherther4to3tag>1){
											
											$("input[name='picstate3']").attr("value",$("input[name='picstate4']").attr("value"));
											wherther4to3=false;		
										}else{
											
											
											wherther4to3=true;	
											
											$("input[name='picstate3']").attr("value","4change3");
											
										}
										
										$("input[name='picstate4']").attr("value","not_exist");
										
									
										
										$("#pic_3").remove();
										$("#pic_4").attr("id","pic_3");
										$("#btnp4").attr("id","btnp3");
																		
										$("input[name='p4']").attr("name","p3");
										
										document.getElementsByName("p4_text")[0].setAttribute("name","p3_text");
										
										pic4exist=false;
										
									}else{
										
										$("#pic_3").remove();
										$("input[name='picstate3']").attr("value","not_exist");
										
									}
									
									pic3exist=false;
								}else{
									
									 return false;
								}
						});
							$(document).on('change',"input[name='p1']",function(){
							$("input[name='picstate1']").attr('value','upload');	
						});
						$(document).on('change',"input[name='p2']",function(){
							$("input[name='picstate2']").attr('value','upload');	
						});
						$(document).on('change',"input[name='p3']",function(){
							$("input[name='picstate3']").attr('value','upload');	
						});
						$(document).on('change',"input[name='p4']",function(){
								
							$("input[name='picstate4']").attr('value','upload');	
						});
						$(document).on('change',"#day,#month",function(){
							
							y=$("#year").find(":selected").text();
							
							m=$("#month").find(":selected").text()
							d=$("#day").find(":selected").text();
							
							date=(parseInt(y)+1911)+"/"+m+"/"+d;
							
						
							d = new Date(date);
							day="";
							switch(d.getDay()){
								case 0:day="日";break;
								case 1:day="一";break;
								case 2:day="二";break;
								case 3:day="三";break;
								case 4:day="四";break;
								case 5:day="五";break;
								case 6:day="六";break;
							}
							$("#dates_day").html(day);
							$("input[name='dates_day']").attr("value",day);	
						});
					});
				</script>
				</head>
<body>
<div class='bgfixed'>
</div>
<?php 
	
	if(isset($_SESSION['loggin'])&& !empty($_COOKIE['PHPSESSID'])){
			
			echo "<div style='position:fixed;
						width:100%;font-size:22px;
						height:50px;
						margin-top:-60px;
						background-color:#188464;	
						color:white;
						border-bottom:1px gray solid;
								'>
								<div style='margin-left:30%;position:absolute;width:1000px; font-size:22px; line-height:47px; color:white;' >
										您選擇的活動是：".$r[0]['event_name']."
								</div>
								<div style='background-color:#1F9E78; position:absolute;width:177px;height:50px; font-size:22px;line-height:47px; color:white;' >
									<a class='prev' style='display:inline-block;text-decoration:none;'href='second.php'>返回活動選擇頁面</a>
								</div>
								</div>";
			
			page_select($page);
			echo "<input type='hidden' name='form_num' value='".$_GET['form_num']."'>";
			echo "</form>";
			//echo "<div/><a style=' position: fixed;  bottom: 0;  right:0; background-color:yellow; font-size:30px; ' href='layout.php'>點此登出</a>";
	}else{
		header("Location:second.php");
	}
?>
</body>
</html>