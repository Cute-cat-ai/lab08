<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<?php include('inc/header.inc'); ?>

<h1>Welcome back，<?php echo htmlspecialchars($_SESSION['user']); ?>！</h1>
<p><a href="logout.php">Log out</a></p>

<?php include('inc/footer.inc'); ?>
