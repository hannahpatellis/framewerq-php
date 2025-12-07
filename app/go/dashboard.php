<?php

session_start();
if(!isset($_SESSION['active']) || $_SESSION['active'] != true) {
  header('Location: /go/login.php?error=forbidden');
}

$page_title = "Dashboard";
require_once(__DIR__ . '/../partials/general/header.php');

?>

<h1>Dashboard</h1>

<?php

require_once(__DIR__ . '/../partials/general/footer.php');

?>