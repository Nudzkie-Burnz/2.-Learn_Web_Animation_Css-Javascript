<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smooth Parallaxing</title>
	<link rel="stylesheet" href="../assets/css/css_smooth_parallaxing15.css">
</head>
<body>
	<div id="main_contents">
		<div id="round_circle"></div>
		<div id="orange_triangle"></div>
		<div id="orange_triangle2"></div>
		<div id="mr_fart"></div>
		<h1>Parallaxing!</h1>
		<div class="paragraph_container">
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
			<p class="contents">Here what you see is parallaxing!</p>
		</div>
	</div>
	<script>
		window.addEventListener("DOMContentLoaded", scrollLoop, false);

		var round_circle = document.querySelector('#round_circle');
		var mr_fart = document.querySelector('#mr_fart');
		var orange_triangle = document.querySelector('#orange_triangle');
		var orange_triangle2 = document.querySelector('#orange_triangle2');

		var xScrollPosition;
		var yScrollPosition;

		function scrollLoop() {
			xScrollPosition = window.scrollX;
			yScrollPosition = window.scrollY;

			setTranslate(0, yScrollPosition * -1.2, round_circle);
			setTranslate(0, yScrollPosition * 0.5, mr_fart);
			setTranslate(0, yScrollPosition * -2.5, orange_triangle);
			setTranslate(0, yScrollPosition * 2.5, orange_triangle2);

			requestAnimationFrame(scrollLoop);
		}

		function setTranslate(xPos, yPos, el) {
			el.style.transform = 'translate3d('+xPos+'px,'+yPos+'px, 0px)';
		}
	</script>
</body>
</html>