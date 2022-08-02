<html>
<head>
<title>CookieClicker</title>
<link rel="icon" href="./icon_title.gif">
<link rel="stylesheet" type="text/css" href="./CookieClicker.css">
<script src="CookieClicker.js"></script>
</head>
<body>
<table class="table">
	<th style="line-height: 80%; width: 15%">
			<h3 align="center">cookies :</h3>
			<h1 align="center" id="cookies_show">0</h1>
			<h3 align="center">cookies/sec :</h3>
			<h1 align="center" id="cookies_per_sec_show">0</h1>
			<h3 align="center">clicks/sec</h3>
			<h1 align="center" id="clicks_per_sec_show">0</h1>
	</th>
	<th style="line-height: 80%; width: 25%">
			<p align="center">
				<image id="cookie_img" src="./cookie.jpg" width="392.5px" height="393px" onclick="cookiesplus()">	
			</p>
	</th>
	<th style="line-height: 80%, width:60%">
			<div>Multiplier:<br>
			<input type="number" value="1" id="multiplier"><button onclick="document.getElementById('multiplier').value = '1';">x1</button><button onclick="document.getElementById('multiplier').value = '5';">x5</button><button onclick="document.getElementById('multiplier').value = '10';">x10</button></div>
			<h3 id="farm_show">Acheter une ferme pour 100 cookies (tu as 0 fermes)</h3>
			<img src="./cookie_farm.png" onclick="cookies_farm()" width="13%"><br>
			<h3 id="usine_show">Acheter une usine pour 1000 cookies (tu as 0 usines)</h3>
			<img src="./usine_a_cookie.jpg" width="13%" onclick="cookies_usine()"><br>
			<h3 id="god_show">Acheter un dieu pour 1.000.000.000 cookies (tu as 0 dieux)</h3>
			<img src="./cookie_god.jpg" width="13%" onclick="cookies_god()"><br>
	</th>
</table>
<form action="CookieClicker.php" method="post">
	<input style="display:none" id="cookies_save" type="text" name="cookies"/><br>
	<input style="display:none" id="farm_save" type="text" name="farm"/><br>
	<input style="display:none"  id="usine_save" type="text" name="usine"/><br>
	<input style="display:none"  id="god_save" type="text" name="god"/><br>
    <input onclick="save()" type="submit" value="Save"/>
</form>
<?php
$cookies;
$farm;
$usine;
$god;
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['cookies'])){
	sleep(1);
	$GLOBALS["cookies"] = $_POST['cookies'];
	$GLOBALS["farm"] = $_POST["farm"];
	$GLOBALS["usine"] = $_POST["usine"];
	$GLOBALS["god"] = $_POST["god"];
	$file_write = fopen("save","w");
	fwrite($file_write, $cookies."\r\n");
	fwrite($file_write, $farm."\r\n");
	fwrite($file_write, $usine."\r\n");
	fwrite($file_write, $god."\r\n");
	fclose($file_write);
};

	$file_read = fopen("save", "r");
	$cookies = fgets($file_read);
	$farm = fgets($file_read);
	$usine = fgets($file_read);
	$god = fgets($file_read);
	fclose($file_read);
?>
<script type="text/javascript">
	/*setTimeout(
		function load(){*/
			cookies_nb = Number(<?php echo json_encode($GLOBALS["cookies"]); ?>);
			document.getElementById("cookies_show").innerHTML = cookies_nb;
			farm_nb = Number(<?php echo json_encode($GLOBALS["farm"]); ?>);
			document.getElementById("farm_show").innerHTML = ("Acheter une ferme pour 100 cookies (tu as "+farm_nb+" fermes)");
			usine_nb = Number(<?php echo json_encode($GLOBALS["usine"]); ?>);
			document.getElementById("usine_show").innerHTML = ("Acheter une usine pour 1000 cookies (tu as "+usine_nb+" usines)");
			god_nb = Number(<?php echo json_encode($GLOBALS["god"]); ?>);
			document.getElementById("god_show").innerHTML = ("Acheter un dieu pour 1.000.000.000 cookies (tu as "+god_nb+" dieux)");
			for(i = 0; i < farm_nb; i++){
				cookies_per_sec = cookies_per_sec + 1;
				document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;};
			for(i = 0; i < usine_nb; i++){
				cookies_per_sec = cookies_per_sec + 10;
				document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;};
			for(i = 0; i < god_nb; i++){
				cookies_per_sec = cookies_per_sec + 100000000;
				document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;};
		//},1000);
</script>
<marquee id="mar" direction="up"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"><img width="5%" src="cookie.jpg"></marquee>
</body>
</html>