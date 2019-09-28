<?php
if(isset($_POST['page']) && isset($_SESSION['loggin'])){
		if($p==1){
		$test_arr=array(
					'date'=>array(
						"date_y"=>$input[1],
						"date_m"=>$input[2],
						"date_d"=>$input[3]
						),
					"dates_day"=>$input[4],
					"city"=>$input[5],
					"host"=>$input[6],
					"host_down"=>$input[7],
					"location"=>$input[8],
					"activity_name"=>$input[9],
					"insurance"=>$input[10],
					"visit_people"=>$input[11],
					'first_part'=>array(),
					'second_part'=>array(),
					'third_part'=>array(),
					'picture'=>array()
					);
		}else{
				$test_arr=array(
					'date'=>array(
						"date_y"=>$input[1],
						"date_m"=>$input[2],
						"date_d"=>$input[3]
						),
					"dates_day"=>$input[4],
					"host_down"=>$input[5],
					"city"=>$input[6],
					"location"=>$input[7],
					"host"=>$input[8],
					"activity_name"=>$input[9],
					"insurance"=>$input[10],
					"visit_people"=>$input[11],
					'first_part'=>array(),
					'second_part'=>array(),
					'third_part'=>array(),
					'picture'=>array()
					);
		}
		/*
			12
			45
			14
			27
			10
		*/			
		//first_part	
			array_push($test_arr['first_part'],$input[12]);
			array_push($test_arr['first_part'],$input[13]);
			array_push($test_arr['first_part'],$input[14]);
			
			switch($p){
					case 1:{$va=12;break;}
					case 2:{$va=48;break;}
					case 3:{$va=13;break;}
					case 4:{$va=23;break;}
					case 5:{$va=10;break;}
			}
		$first_part_in=15;
		for($v=0;$v<$va;$v++){
			array_push($test_arr['first_part'],$input[$v+15]);
		}
		//second_part
		array_push($test_arr['second_part'],$input[$anonum-5]);
		array_push($test_arr['second_part'],$input[$anonum-4]);
		array_push($test_arr['second_part'],$input[$anonum-3]);
		array_push($test_arr['second_part'],$input[$anonum-2]);
		//third_part	
		array_push($test_arr['third_part'],$input[$anonum-1]);
		array_push($test_arr['third_part'],$input[$anonum]);
		array_push($test_arr['picture'],$picname1);
		array_push($test_arr['picture'],$picname2);
		
		if($fe3!=-1){
			
			array_push($test_arr['third_part'],$input[$anonum+1]);
			array_push($test_arr['picture'],$picname3);
		}
		if($fe4!=-1){
			array_push($test_arr['third_part'],$input[$anonum+2]);
			array_push($test_arr['picture'],$picname4);
		}
	$name_w=$_POST['noname_whether'];
	
	$w=fopen($userpath."/nameWhthernot.txt","w");
		if($name_w=="no"){
			fwrite($w,"此份表單不需要匿名");
		}else if($name_w=="yes"){
			fwrite($w,"此份表單需要匿名");
		}
	fclose($w);
	$fp=fopen($userpath."/recover.json","w");
		fwrite($fp,json_encode($test_arr));
	fclose($fp);
	}
	else{
		header("Location:select_page.php");
	}
?>