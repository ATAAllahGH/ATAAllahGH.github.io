<?php
	$server = 'localhost';
	$user = 'ata';
	$passworduser = '1234';
	$db = 'school';

	$connection = mysqli_connect($server,$user,$passworduser,$db);
	if(!$connection){
		die("اتصال با پایگاه داده برقرار نشد زیرا:".mysqli_connect_error());
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل مدیریت</title>
<style>
	body{
		margin: 0px;
		height: auto;
	}
	#bar{
		position: absolute;
		top: 0px; right: 0px; height: 60px; width: 100%;
		background-color: #282828; box-shadow: 0px 4px 7px #333;
	}
	#loginbox{
		position: absolute;
		top: 25%; right: 27%; width: 46%; height: 50%;
		background-color: lightgray; box-shadow: 0px 0px 5px #333; 
		direction: rtl;
	}
	.titles{
	color: #91E156;
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
	font-weight: 900; font-size: 36px; text-shadow: 0px 0px 15px #f0f0f0;
	}
	.tr1{
		position: absolute; top: 20%; right: 20%;
		width: 60%; 
	}
	.tr2{
		position: absolute; top: 35%; right: 20%;
		width: 60%; 
	}
	.tr3{
		position: absolute; top: 50%; right: 20%;
		width: 60%; 
	}
	#tf{
		position: absolute; bottom: 14%; right: 43%; color: red; font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-weight: 900; font-size: 21px; direction: rtl;
	}
	#tf2{
		position: absolute; bottom: 10%; right: 43%; color: red; font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		font-weight: 900; font-size: 21px; direction: rtl;
	}
	#usernamestyle{
		position: absolute; top: 0px; left: 0px; width: 50%; border: none; height: 100%;
	}
	#passwordstyle{
		position: absolute; top: 0px; left: 0px; width: 49.3%; border: none; height: 100%;
	}
	
</style>

<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script>
	
//	var y = 

	$(document).ready(ata);
	function ata(){
	$('#tableid tbody').children().first().addClass('tr1').next().addClass('tr2').next().addClass('tr3');
	

	
	$(document).mousemove(responsive);
	function responsive(){
		
	var pagex = $(document).width();	
	var pagey = $(document).height();
	if (pagey<<pagex){
		console.log(pagex,pagey);
	}	
		
	}
	
		
		
	}
	
	

	
</script>
</head>
<body style="height: auto;">
<div id="bar"><center><div class="titles">پنل مدیریت</div></center></div>
<div id="loginbox">
	
	<form  method="post" action="cpanel.php">
	<table id="tableid">
	<tbody>
	<tr>
		<td>نام کاربری :</td>
		<td><input type="text" name="username" id="usernamestyle"></td>
	</tr>
	<tr>
		<td>کلمه ی عبور :</td>
		<td><input type="text" name="password" id="passwordstyle"></td>
	</tr>
	<tr>
	<input type="hidden" name="validate" value="yes">
		<td><input type="submit" name="submit" id="button" value="ورود"></td>
	</tr>
		
		
		
	</tbody>
	</table>
	</form>

	
</div>
<?php


	if(isset($_POST['submit'])){
		if($_POST['username']=='saghir'){}else{
		echo '<div id="tf">'.'نام کاربری صحیح نمی باشد.'.'</div>';
	}
	if($_POST['password']=='4545' && $_POST['username']=='saghir'){
		header("Location: includes/cpanelloged.php");
		exit();
	}else{
		echo '<div id="tf2">'.'اطلاعات غلط'.'</div>';
	}
	}









?>

</body>
</html>


