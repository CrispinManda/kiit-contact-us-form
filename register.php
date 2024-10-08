<?php include 'header.php'; ?>

<div class="container mt-5  ">
    <h2>Register</h2>
    <?php
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger">' . $_GET['error'] . '</div>';
    }
    if (isset($_GET['success'])) {

        echo '<div class="alert alert-success">Registration successful! You can now <a href="index">login</a>.</div>';
    }

   //header("Location: index.php");
    ?>
    <form action="process_register.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

 <?php include 'footer.php'; ?>

