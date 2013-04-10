<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">

	<title>Documentação - Laravel Brasil</title>

    {{ Html::style('css/main.css') }}

    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    
</head>
<body>

	<div id="wrapper">

		<header>

			<h1>Documentação</h1>

		</header>

		<div class="container">

			<nav>

				@yield('sidebar')

			</nav>

			<section>

				@yield('content')

			</section>

		</div>

	</div>	

	<!-- jQuery / Bootstrap -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>

	{{ Html::script('js/prettify.js') }}
	{{ Html::script('js/main.js') }}

</body>
</html>