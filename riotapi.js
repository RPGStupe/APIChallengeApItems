function displayNextImageTop(imgTopNum) {
			var imgtemp;
			ran = Math.round(Math.random() * (592));
			if (imgTopNum < 10) {
				imgtemp = "imgTop0" + imgTopNum.toString();
			} else {
				imgtemp = "imgTop" + imgTopNum.toString();
			}
			rand = Math.round(Math.random() * (45000 - 15000) + 15000);
			setTimeout("fadeInFunction(" + imgTopNum + ")", rand);
			setTimeout("displayNextImageBot(" + imgTopNum + ")", rand+2000);
			imgtemp.src = "/LoL Splash Art/SplashArt" + ran + ".jpg";
		}

function displayNextImageBot(imgBotNum) {
	var imgtemp;
	ran = Math.round(Math.random() * (592));
	if (imgBotNum < 10) {
		imgtemp = "imgBot0" + imgBotNum.toString();
	} else {
		imgtemp = "imgBot" + imgBotNum.toString();
	}
	rand = Math.round(Math.random() * (45000 - 15000) + 15000);
	setTimeout("fadeOutFunction(" + imgBotNum + ")", rand);
	setTimeout("displayNextImageTop(" + imgBotNum + ")", rand+2000);
	imgtemp.src = "/LoL Splash Art/SplashArt" + ran + ".jpg";
}

function fadeOutFunction(imgTopNum){
	$("#imgTop" + imgTopNum.toString()).fadeOut(2000);
}
function fadeInFunction(imgTopNum){
	$("#imgTop" + imgTopNum.toString()).fadeIn(2000);
}

function startTimeout() {
	tableImagesBottom.style.visibility = 'visible';
	tableImagesTop.style.visibility = 'visible';
	for (i = 0; i < 10; i++) { 
		for (j = 0; j < 10; j++) {
			rand = Math.round(Math.random() * (5000 - 15000) + 15000);
			setTimeout("displayNextImageTop(" + i.toString() + j.toString() + ")", rand+2000);
			setTimeout("fadeOutFunction(" + i.toString() + j.toString() + ")", rand);
		}
	}
}

function champsNav() {
	window.location = 'champions.php';
}
function itemsNav() {
	window.location = 'items.php';
}
function rolesNav() {
	window.location = 'roles.php';
}