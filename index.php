<!DOCTYPE html>
<html>
<head>
	<title>AndrewC0de</title>
	<style>
		body {
			background-color: #141414;
			color: #fff;
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 900px;
			margin: 0 auto;
			padding: 50px;
			text-align: center;
		}

		h1 {
			font-size: 60px;
			margin-bottom: 50px;
		}

		p {
			font-size: 24px;
			line-height: 1.5;
			margin-bottom: 40px;
		}

		.snowflakes {
			position: absolute;
			top: -10%;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: -1;
			pointer-events: none;
		}

		.snowflakes:before {
			content: ' ';
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-image: url('snowflake.png');
			animation: snowflakes 20s linear infinite;
		}

		@keyframes snowflakes {
			0% {
				transform: translateY(0);
			}
			100% {
				transform: translateY(100vh);
			}
		}
	</style>
</head>
<body>
	<div class="snowflakes"></div>
	<div class="container">
		<h1>AndrewC0de</h1>
		<p>Welcome to AndrewC0de, your one-stop-shop for all your coding needs. We specialize in PHP and other programming languages, offering courses, tutorials, and other resources to help you become a better developer.</p>
		<a href="#" class="btn">Get started</a>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(function() {
			$('.btn').click(function(e) {
				e.preventDefault();
				alert('Coming soon!');
			});
		});
	</script>
</body>
</html>
