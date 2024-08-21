<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>Dashboard, <?php echo $_SESSION['user_name']; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
 <?php include 'footer.php'; ?>
