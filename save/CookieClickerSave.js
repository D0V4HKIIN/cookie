var cookies_nb = 0;
var cookies_per_sec = 0;
var usine_nb = 0;
var god_nb = 0;
var farm_nb = 0;
var click = 0;
var rng = 10;


	setInterval(
		function show_clicks(){
			document.getElementById("clicks_per_sec_show").innerHTML = click;
			click = 0;
		}, 1000);

	setInterval(
		function change_speed(){
			rng = Math.floor((Math.random() * 50) + 1);
			document.getElementById("mar1").scrollAmount = rng;
			document.getElementById("mar2").scrollAmount = rng;
		}, 1000);

	function cookiesplus() {
		cookies_nb = cookies_nb + 1;
		click = click + 1 ;
		document.getElementById("cookies_show").innerHTML = cookies_nb;
		document.getElementById("cookie_img").setAttribute("width","330px");
		setTimeout(
			function reset(){
				document.getElementById("cookie_img").setAttribute("width","392.5px");},500);
	}

	function cookies_farm(){
		if (cookies_nb - 100*Number(document.getElementById("multiplier").value) >= 0){
			cookies_nb = cookies_nb - 100*document.getElementById("multiplier").value;
			document.getElementById("cookies_show").innerHTML = cookies_nb;
			farm_nb = farm_nb + Number(document.getElementById("multiplier").value);
			document.getElementById("farm_show").innerHTML = ("Acheter une ferme pour 100 cookies (tu as "+farm_nb+" fermes)");
			cookies_per_sec = cookies_per_sec + Number(document.getElementById("multiplier").value);;
			document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;
			for(i = 0; i < Number(document.getElementById("multiplier").value); i++){
				setInterval(
					function cookies_every_sec_from_farm(){
						cookies_nb = cookies_nb + 1;
						document.getElementById("cookies_show").innerHTML = cookies_nb;
					}, 1000);
			}
		}
	}

	function cookies_usine(){
		if (cookies_nb - 1000*Number(document.getElementById("multiplier").value) >= 0){
			cookies_nb = cookies_nb - 1000*Number(document.getElementById("multiplier").value);
			document.getElementById("cookies_show").innerHTML = cookies_nb;
			usine_nb = usine_nb + 1*Number(document.getElementById("multiplier").value);
			document.getElementById("usine_show").innerHTML = ("Acheter une usine pour 1000 cookies (tu as "+usine_nb+" usines)");
			cookies_per_sec = cookies_per_sec + 10*Number(document.getElementById("multiplier").value);
			document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;
			for(i = 0; i < Number(document.getElementById("multiplier").value); i++){
				setInterval(
					function cookies_every_sec_from_usine(){
						cookies_nb = cookies_nb + 1;
						document.getElementById("cookies_show").innerHTML = cookies_nb;
				}, 100);
			}
		}
	}

	function cookies_god(){
		if (cookies_nb - 1000000000*Number(document.getElementById("multiplier").value) >= 0){
			cookies_nb = cookies_nb - 1000000000*Number(document.getElementById("multiplier").value);
			document.getElementById("cookies_show").innerHTML = cookies_nb;
			god_nb = god_nb + 1*Number(document.getElementById("multiplier").value);
			document.getElementById("god_show").innerHTML = ("Acheter un dieu pour 1.000.000.000 cookies (tu as "+god_nb+" dieux)");
			cookies_per_sec = cookies_per_sec + 100000000*Number(document.getElementById("multiplier").value);
			document.getElementById("cookies_per_sec_show").innerHTML = cookies_per_sec;
			for(i = 0; i < Number(document.getElementById("multiplier").value); i++){
				setInterval(
					function cookies_every_sec_from_god(){
						cookies_nb = cookies_nb + 1000000;
						document.getElementById("cookies_show").innerHTML = cookies_nb;
					}, 100);
			}
		}
	}

	function cookiescheat() {
		var step = Number(document.getElementById("cheat_input").value);
		cookies_nb = cookies_nb + step;
		document.getElementById("cookies_show").innerHTML = cookies_nb;
	}

	function save() {
		document.getElementById("cookies_save").value = cookies_nb;
		document.getElementById("farm_save").value = farm_nb;
		document.getElementById("usine_save").value = usine_nb;
		document.getElementById("god_save").value = god_nb;
	}