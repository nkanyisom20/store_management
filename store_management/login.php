<?php
ob_start();
session_start();
include('inc/header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Inventory.php';
	$inventory = new Inventory();
	$login = $inventory->login($_POST['email'], $_POST['pwd']);
	if(!empty($login)) {
		$_SESSION['userid'] = $login[0]['userid'];
		$_SESSION['name'] = $login[0]['name'];
		header("Location:index.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title>Inventory Management System</title>
<link href="css/style.css" rel="stylesheet">
<?php include('inc/container.php');?>
<div class="container">
	<div class="login-form pull-left">
		<h4>User Login:</h4>
		<form method="post" action="">
			<div class="form-group">
			<?php if ($loginError ) { ?>
				<div class="alert alert-warning"><?php echo $loginError; ?></div>
			<?php } ?>
			</div>
			<div class="form-group">
				<input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus="" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" placeholder="Password" required>
			</div>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-info">Login</button>
			</div>
			<p>Admin<b>Email</b> : admin@gmail.com<br><b>Password</b> : 123</p>
			<p>User<b>Email</b> : nqubeko@gmail.com<br><b>Password</b> : 123</p>
		</form>
		<br>

	</div>
</div>
<?php include('inc/footer.php');?>
