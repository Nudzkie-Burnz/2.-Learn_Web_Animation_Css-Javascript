<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Css Animation Events</title>
	<link rel="stylesheet" href="../assets/css/css_animation_events4.css">
</head>
<body>
	<h2>Animation Events</h2>
	<div class="circle">Hello</div>

	<script>
		var element = document.querySelector('.circle');

		// element.addEventListener("animationstart", start, false);
		element.addEventListener("animationiteration", updateColors, false);
		// element.addEventListener("animationend", end, false);

		function getRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = '#';

			for (var i = 0; i < 6; i++) {
			color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
			console.log(color);
		}

		// function start(){
		// 	document.body.style.backgroundColor = "lightblue";
		// }
		function updateColors(){
			document.querySelector('H2').style.color = getRandomColor();
			document.querySelector('.circle').style.backgroundColor = getRandomColor();
			document.querySelector('.circle').style.color = getRandomColor();
			document.body.style.backgroundColor = getRandomColor();
		}
		// function end(){
		// 	document.body.style.backgroundColor = "khaki";
		// }
	</script>
</body>
</html>