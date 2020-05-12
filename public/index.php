<?php
// index.php
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <h1>Página Index de Carlos</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Sign in</a>
        <?php else: ?>
        <strong>Bienvenido, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>

        <p>
            Este es un ejmplo para verificar que llega la página.
        </p>
    </body>
</html>
