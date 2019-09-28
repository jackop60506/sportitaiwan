<?php
session_start();
$path="";
$picstate1="upload";
$picstate2="exist";
$picstate3="exist";
$picstate4="exist";
	if(is_dir('D:/xamp/upload/'.$_SESSION['userid'].'/1')){
			$path='D:/xamp/upload/'.$_SESSION['userid'].'/1';
			$data=scandir($path);
			
			
			;// 0 will start replacing at the first character in the string
			
			
						
			
			for($a=2;$a<count($data);$a++){
					
					if($picstate1=="upload" && $a==3){
						echo substr($data[$a],strpos($data[$a],"_")+1);
					}
					if($picstate2=="upload" && $a==4){
						echo $path.$data[$a];
					}
					if($picstate3=="upload" && $a==5){
						echo $path.$data[$a];
					}
					if($picstate4=="upload" && $a==6){
						echo $path.$data[$a];
					}
					if($picstate4=="upload" && $a==10){
						echo $path.$data[100];
					}
			}
	}
	
	

?>
<html>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script>

</script>
	<body>
		<form action="test.php" method="POST" enctype="multipart/form-data">
			<input type="file" id="p1" name="p1" value="sssss">
			<input type="submit">
			</form>
	</body>
</html>