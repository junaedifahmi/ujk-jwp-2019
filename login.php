<?php
include_once('open_resources.php');
if(isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<?=$header?>
<div class="container">
    <div class="signin-form">
		<form class="form-signin" method="post" id="login-form">
			<h2 class="form-signin-heading" style="text-align: center;">Silakan Login</h2>
			<div id="error">
			<!-- error will be shown here ! -->
			</div>
			<div class="form-group">
				<label for="user_email"> Email : &nbsp;</label>
				<input type="email" class="form-control" placeholder="Masukkan Email" name="email" id="user_email" />
				<span id="check-e"></span>
			</div>
			<div class="form-group">
       			<label for="password">Password :</label>
       			<input type="password" class="form-control" placeholder="Password" name="pass" id="password" />
       		</div>
       		<div class="form-group">
           		<button type="submit" class="btn btn-success pull-right" name="tombol-login" id="btn-login">
   					<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login
				</button>
				<button class="btn btn-danger">
					Lupa Password?
				</button>
			</div>
		</form>
	</div>
</div>
<?=$footer?>