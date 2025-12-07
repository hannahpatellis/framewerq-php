<?php

session_start();
if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
  header('Location: /go/dashboard.php');
}

require_once(__DIR__ . "/../resources/db.php");
require_once(__DIR__ . "/../resources/env.php");

function authenticate_user($row) {
  if (password_verify($_POST['password'], $row[0]['password_hash'])) {
    $_SESSION['active'] = true;
    $_SESSION['user_id'] = $row[0]['id'];
    $_SESSION['username'] = $row[0]['username'];
    $_SESSION['first_name'] = $row[0]['first_name'];
    $_SESSION['last_name'] = $row[0]['last_name'];
    $_SESSION['email'] = $row[0]['email'];
    $_SESSION['is_admin'] = $row[0]['is_admin'];
    header('Location: /go/dashboard.php?status=login_success');
  } else {
    header('Location: /go/login.php?status=incorrect_password');
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $stmt_string = "SELECT id, username, password_hash, first_name, last_name, email, is_admin FROM users WHERE username = ?;";
  $stmt = $mysqli->prepare($stmt_string);
  $stmt->bind_param("s", $_POST['username']);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  $mysqli->close();
  authenticate_user($row);
} else {
  header("Location: /go/login.php?status=login_error");
}

?>