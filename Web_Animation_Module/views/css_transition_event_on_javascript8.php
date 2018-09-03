<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transition Event</title>
	<link rel="stylesheet" href="../assets/css/css_transition_event_on_javascript8.css">
</head>
<body>
	<h1>Transition Event on Javascript</h1>
	<div class="circle_event_container">
		<div class="circle_event">
			<h2 class="content">0</h2>
		</div>
	</div>

	<script>
		var circle_event = document.querySelector('.circle_event');
		var text_content = document.querySelector('.content');
		var counter = 0;

		circle_event.addEventListener('transitionend', update_content, false);


		function update_content(){
			counter++;

			text_content.textContent = counter;
		}
	</script>
</body>
</html>