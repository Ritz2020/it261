<?php
// our login page
// a simple form with 2 input fields
// one for usename
// one for password

include('server.php');
include('./includes/header.php');

?>
<div id="wrapper">
<h1 class="center">Login!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">

<label>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">

<button type="submit" name="login_user" class="btn">Login!</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' ">Reset</button>

</fielset>
</form>

<p class="center"> Not a member? <a href="register.php">PLease register here!</a></p>

<?php 
include('errors.php') ; ?>
</div>
<!-- end wrapper -->
<?php include('./includes/footer.php');
