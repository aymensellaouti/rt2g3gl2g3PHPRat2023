<?php
include_once('fragments/isAuthenticated.php');
$pageTitle = 'Home';
include_once ('fragments/header.php');
include_once 'autoload.php';
$userRepository = new UserRepository();
$users = $userRepository->findAll();
?>

<div class="container">
    <div class="alert alert-warning">
        <a href="addUser.php" class="btn btn-dark">Add User</a>
    </div>
    <?php foreach($users as $user): ?>
        <div class="row alert <?php
            if ($user->role == 'admin') {
                echo "alert-primary";
            } else {
                echo "alert-secondary";}
            ?>
            ">
            <div class="col-10">
                <?= $user->username ?>
            </div>
            <div class="col-2">
                <a href="userDetails.php?id=<?= $user->id ?>" class="btn btn-success">
                    Détails
                </a>
                <a href="deleteDetails.php?id=<?= $user->id ?>" class="btn btn-danger">
                    Delete
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
include_once ('fragments/footer.php');
?>
