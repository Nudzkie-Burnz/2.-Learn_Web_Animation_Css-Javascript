<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smooth Sliding Menu</title>
	<link rel="stylesheet" href="../assets/css/css_smooth_sliding_menu13.css">
</head>
<body>
	<h1>Smooth Sliding Menu</h1>
	<div id="sliding_container" class="show">
		<ul class="sliding_menu">
			<li class="slides"><a href="#">Home</a></li>
			<li class="slides"><a href="#">About</a></li>
			<li class="slides"><a href="#">Contacts</a></li>
			<li class="slides"><a href="#">Search</a></li>
		</ul>
	</div>
	<div id="main_container">
		<button id="round_button"></button>
		<h1>Choose an item on the list.</h1>
		<ul>
			<li class="list_item">Hello</li>
			<li class="list_item">Im</li>
			<li class="list_item">Nathan</li>
			<li class="list_item">Bernard</li>
			<li class="list_item">Ferrer</li>
			<li class="list_item">Nudo</li>
		</ul>
	</div>
	<script>
		var round_button = document.querySelector('#round_button');
		var sliding = document.querySelector('#sliding_container');

		round_button.addEventListener('click', show_clicked, false);
		sliding.addEventListener('click', slide_show, false);

		function show_clicked(){
			sliding.classList.add('show_sliding_menu');
			document.body.style.overflow = 'hidden';
		}

		function slide_show(e){
			sliding.classList.remove('show_sliding_menu');
			e.stopPropagation();
			document.body.style.overflow = 'auto';
		}
	</script>
</body>
</html>