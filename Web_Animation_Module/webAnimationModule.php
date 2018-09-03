<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Animation Module</title>
	<style>
		*{
			font-family: arial, sans-serif;
			margin: 0px;
			padding: 0px;
		}
		body{
			text-align: center;
		}
		body h1{
			margin: 50px auto 0px auto;
		}
		body hr{
			margin: 0px auto;
			width: 400px;
		}
		#container{
			height: 200px;
			margin: 20px auto;
			padding: 10px;
			width: 600px;
		}
		#container ul li{
			display: inline-block;
		}
		#container ul li:after{
			content: '/';
		}
		#container ul li:last-child:after{
			content: '';
		}
		#container ul li a{
			text-decoration: none;
			font-weight: bold;
		}
		#container ul li a:hover{
			color: aqua;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<h1>Web Animation Module</h1>
	<hr>
	<div id="container">
		<ul>
			<li class="module_links">
				<a href="views/css_animation1.php">Css Animation</a>
			</li>
			<li class="module_links">
				<a href="views/css_transitions2.php">Css Transitions</a>
			</li>
			<li class="module_links">
				<a href="views/css_easing3.php">Css Easing</a>
			</li>
			<li class="module_links">
				<a href="views/css_animation_events4.php">Css Animation Events</a>
			</li>
			<li class="module_links">
				<a href="views/css_js_animation_frame5.php">Javascript Animation Frame</a>
			</li>
			<li class="module_links">
				<a href="views/css_smooth_animation6.php">Css Smooth Animation</a>
			</li>
			<li class="module_links">
				<a href="views/css_hover_image7.php">Css Hovering</a>
			</li>
			<li class="module_links">
				<a href="views/css_transition_event_on_javascript8.php">Css Transition Event on Javascript</a>
			</li>
			<li class="module_links">
				<a href="views/css_kenburns_effect9.php">Css Ken Burns Effect</a>
			</li>
			<li class="module_links">
				<a href="views/css_jittery_effect10.php">Css Jittery Effect</a>
			</li>
			<li class="module_links">
				<a href="views/css_recreating_the_blink_tag11.php">Css Recreating HTML Blink</a>
			</li>
			<li class="module_links">
				<a href="views/css_moveElement_on_click12.php">Css/Js Element move on Click</a>
			</li>
			<li class="module_links">
				<a href="views/css_smooth_sliding_menu13.php">Css Smooth Sliding Menu</a>
			</li>
			<li class="module_links">
				<a href="views/css_animating_links_to_life14.php">Css Animating Links to Life</a>
			</li>
			<li class="module_links">
				<a href="views/css_smooth_parallaxing15.php">Css Smooth Parallaxing</a>
			</li>
			<li class="module_links">
				<a href="views/css_faking_a_morph_animation16.php">Css Faking a Morph Animation</a>
			</li>
		</ul>
	</div>
</body>
</html>