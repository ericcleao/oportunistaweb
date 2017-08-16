<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oportunista Web</title>
	<link rel="icon" href="/img/icon_title.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/img/logo.png" alt=""></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://facebook.com/oportunistaapp">FACEBOOK</a></li>
					<li><a href="/sobre">SOBRE</a></li>
					<li><a href="faq">F.A.Q</a></li>
					<li><a href="contato">CONTATO</a></li>
					@if(!Auth::guest())
					<li class="dropdown active">
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>{{ strtoupper(Auth::user()->name) }} <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Editar perfil</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="">Sair</a></li>
						</ul>
					</li>
					@else
					{{ '' }}
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div class="container body_html">
		@yield('content')
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/js/master.js"></script>
</body>
</html>