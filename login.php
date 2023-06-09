<?php
session_start();
$pageTitle = 'Login';
include_once ('fragments/header.php');
?>
    <div class="container">
        <?php
            if (isset($_SESSION['errorMessage'])) { ?>
        <div class="alert alert-danger">
            <?php
                echo $_SESSION['errorMessage'];
                unset($_SESSION['errorMessage'])
            ?>
        </div>
                <?php }?>
        <form action="processLogin.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
include_once ('fragments/footer.php');
?>