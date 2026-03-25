<!DOCTYPE html>
<html>
<body>

<form method="POST" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
// ✅ Prevent XSS
if (isset($_GET['name'])) {
    echo "Hello " . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
}
?>

</body>
</html>