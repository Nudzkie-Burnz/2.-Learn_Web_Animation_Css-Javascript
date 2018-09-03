<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Move Element on Click</title>
	<link rel="stylesheet" href="../assets/css/css_move_element_on_click12.css">
</head>
<body>
	<h1>Javascript Move Element On Click</h1>
	<div id="circle_container">
		<div id="the_circle"></div>
	</div>
	<script>
		var circle = document.querySelector('#the_circle');
		var container = document.querySelector('#circle_container');

		container.addEventListener('click', moveCircle, false);

		function moveCircle(e){
			var parentpos = getPosition(container);
			var xPosition = e.clientX - parentpos.x - (circle.offsetWidth/2);
			var yPosition = e.clientY - parentpos.y -(circle.offsetHeight/2);

			var transform_value = 'translate3d('+xPosition+'px,'+yPosition+'px, 0)';

			circle.style.transform = transform_value;
		}

		function getPosition(el) {
			var xPosition = 0;
			var yPosition = 0;

			while (el) {
			if (el.tagName == "BODY") {
				// deal with browser quirks with body/window/document and page scroll
				var xScrollPos = el.scrollLeft || document.documentElement.scrollLeft;
				var yScrollPos = el.scrollTop || document.documentElement.scrollTop;

				xPosition += (el.offsetLeft - xScrollPos + el.clientLeft);
				yPosition += (el.offsetTop - yScrollPos + el.clientTop);
			} else {
				xPosition += (el.offsetLeft - el.scrollLeft + el.clientLeft);
				yPosition += (el.offsetTop - el.scrollTop + el.clientTop);
			}

			el = el.offsetParent;
			}
			return {
				x: xPosition,
				y: yPosition
			};
		}
	</script>
</body>
</html>