<!DOCTYPE html>
<html>
<body>

<form method="POST" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
// ❌ XSS vulnerability
if (isset($_GET['name'])) {
    echo "Hello " . $_GET['name'];
}
?>

</body>
</html>