<?php include 'header.php'; ?>





<!-- login form -->
 <div class="container mt-5">
    <h2>Login</h2>
    <?php
    if (isset($_GET['error'])) {
        echo '<div class="alert alert-danger">' . $_GET['error'] . '</div>';
    }
    ?>
    <form action="process_login.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <p class="mt-3">Don't have an account? <a href="register.php">Register</a></p>
</div>



<!-- footer -->
 <?php include 'footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
