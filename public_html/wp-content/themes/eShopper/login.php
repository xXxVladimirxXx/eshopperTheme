<?php
/*
Template Name: login
Template Post Type: page
*/
 get_header(); ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Войти в аккаунт</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Запомните меня
							</span>
							<button type="submit" class="btn btn-default">Войти</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Или</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Создать новый</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Регистрация</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php get_footer(); ?>