<?php
session_start();
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<form method="POST">
    <input name="username">
    <input name="password" type="password">
    <button>Login</button>
</form>
