<?php

session_start();
if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
  header('Location: /go/dashboard.php');
}

$page_title = "Login";
require_once(__DIR__ . '/../partials/general/header.php');

?>

<h1>Login</h1>

<form method="POST" action="/api/login.php">
  <label>Username</label>
  <input type="text" name="username" placeholder="hannah">
  <label>Password</label>
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Login</button>
</form>

<?php

require_once(__DIR__ . '/../partials/general/footer.php');

?>