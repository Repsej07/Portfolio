<?php
// Include the header file
include "./views/inserts/header.php";
?>
<body>
    <form class="login-form" action="/Login" method="post">
        <h2>Login</h2>
        <?php 
        // Display error message if it exists
        if (isset($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
        
        <!-- User Name input field -->
        <label class="label-login">User Name</label>
        <input class="login-input" type="text" name="uname" placeholder="User Name"><br>

        <!-- Password input field -->
        <label class="label-login">Password</label>
        <input class="login-input" type="password" name="password" placeholder="Password"><br>

        <!-- Submit button -->
        <button class="login-button" type="submit">Login</button>
    </form>
</body>
</html>
<?php
// Include the footer file
include "./views/inserts/footer.php"; ?>