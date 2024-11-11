<?php
session_cache_expire(value: 30);
session_start();
include "./views/inserts/header.php";
if (!isset($_SESSION['id']) && !isset($_SESSION['user_name'])) {
?>

	<body>
		<form class="login-form" action="/Login" method="post">
			<h2>Login</h2>
			<?php if (isset($error)) { ?>
				<p class="error"><?php echo $error; ?></p>
			<?php } ?>
			<label class="label-login">User Name</label>
			<input class="login-input" type="text" name="uname" placeholder="User Name"><br>

			<label class="label-login">Password</label>
			<input class="login-input" type="password" name="password" placeholder="Password"><br>

			<button class="login-button" type="submit">Login</button>
		</form>
	</body>

	</html>
<?php
	include "./views/inserts/footer.php";
} else {
	echo "<script>window.location.href = '/admin';</script>";
} ?>