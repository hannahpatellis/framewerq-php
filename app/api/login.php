<?php

session_start();
if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
  header('Location: /go/dashboard.php');
}

// DB query goes here
// should return $row[]

if (password_verify($_POST['password'], $row[0]['PasswordHash'])) {
    $_SESSION['active'] = true;
    $_SESSION['user'] = $row[0]['Username'];
    $_SESSION['first_name'] = $row[0]['FirstName'];
    $_SESSION['last_name'] = $row[0]['LastName'];
    $_SESSION['isAdmin'] = $row[0]['Isadmin'];
    header('Location: /go/dashboard.php');
} else {
  header('Location: /go/login.php?status=incorrect_login');
}

?>