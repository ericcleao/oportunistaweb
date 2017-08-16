@extends('master.index')
@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-login">
			<div class="panel-heading" style="background: #222222">
				<div class="row">
					<div class="col-xs-12">
						<img src="/img/logo.png" class="img-responsive center-block">
					</div>
				</div>
			</div>
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<a href="#" class="active" id="login-form-link">Entrar</a>
					</div>
					<div class="col-xs-6">
						<a href="#" id="register-form-link">Cadastre-se</a>
					</div>
				</div>
				<hr>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<form id="login-form" action="{{ route('login') }}" method="post" role="form" style="display: block;">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="email" name="email" tabindex="1" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Senha" required>
							</div>
							<div class="form-group text-left">
								<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
								<label for="remember"> Lembre-me</label>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12">
										<div class="text-center">
											<a href="" tabindex="5" class="forgot-password">Esqueceu a senha?</a>
										</div>
									</div>
								</div>
							</div>
						</form>
						<form id="register-form" action="/customregister" method="post" role="form" style="display: none;">	
							{{ csrf_field() }}
							<div class="form-group">
								<label>Tipo de usuario:</label>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-usertype active">
										<input type="radio" name="user_type" id="option1" value="1" autocomplete="off" checked> Aluno
									</label>
									<label class="btn btn-usertype">
										<input type="radio" name="user_type" id="option2" value="2" autocomplete="off"> Professor
									</label>
								</div>	
							</div>


							<div class="form-group">
								<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Sobrenome" required>
							</div>
							<div class="form-group">
								<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Senha" required>
							</div>
							<div class="form-group">
								<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirme sua senha" required>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastre-se agora!">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection