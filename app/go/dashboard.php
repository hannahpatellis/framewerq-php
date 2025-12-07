<?php

session_start();
if(!isset($_SESSION['active']) || $_SESSION['active'] != true) {
  header('Location: /go/login.php?error=forbidden');
}

$page_title = "Dashboard";
require_once(__DIR__ . '/../partials/general/header.php');

?>

<h1 class="serif">Dashboard</h1>
<h1>Example h1</h1>
<h2>Example h2</h2>
<h3>Example h3</h3>
<p>Example p with <strong>strong</strong> and <em>em</em></p>

<p><?php print_r($_SESSION); ?></p>

<?php

require_once(__DIR__ . '/../partials/general/footer.php');

?>