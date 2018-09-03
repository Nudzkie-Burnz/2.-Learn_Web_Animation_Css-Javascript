<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Request Animation Frame</title>
	<link rel="stylesheet" href="../assets/css/css_js_animation_frame5.css">
</head>
<body>
	<h1>Javascript Request AnimationFrame</h1>
	<div class="animation_container">
		<div class="circle"></div>
	</div>

	<script>
		var circle  = document.querySelector('.circle');
		var initpos = 0;

		var requestanimation = 	window.requestAnimationFrame ||
								window.mozRequestAnimationFrame ||
								window.webkitRequestAnimationFrame ||
								window.msRequestAnimationFrame;

		function slidecircle(){
			initpos += 5;

			circle.style.transform = 'translate3d('+initpos+'px, 0px, 0px)';

			if (initpos >= 400) {
				initpos = -300;
			}
			
			requestanimation(slidecircle);
		}
		slidecircle();					
	</script>
</body>
</html>