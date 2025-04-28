<?php include('inc/header.inc'); ?>

<h2>Login form</h2>

<form method="post" action="process.php">
  <label for="username">User name：</label>
  <input type="text" id="username" name="username" required><br><br>

  <label for="password">Password：</label>
  <input type="password" id="password" name="password" required><br><br>

  <input type="hidden" name="token" value="a20241234">
  <input type="submit" value="Login">
</form>

<?php include('inc/footer.inc'); ?>

