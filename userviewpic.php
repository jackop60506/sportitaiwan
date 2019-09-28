<?php
session_start();
if(isset($_SESSION['loggin'])){
	
  $form_num=$_GET['form_num'];
  $picn= $_GET['picn'];
 
 $path="D:/xamp/upload/".$_SESSION['userid']."/".$form_num."/";
 
	$data=scandir($path);
	$file="";
	foreach($data as $t){
			if(isset($t[strpos($t,"j")-2])){
					if($t[strpos($t,"j")-2]==$picn){
								$file=$t;
					}
			}
	}
	$result_path=$path.$file;
	

	

	$image=imagecreatefromstring(file_get_contents($result_path));
	header('Content-type: image/png');
	imagepng($image);
	 //imagedestroy($image);
}
?>