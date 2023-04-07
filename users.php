<?php
include_once('fragments/isAuthenticated.php');
$pageTitle = 'Home';
include_once ('fragments/header.php');
include_once 'autoload.php';
$dbCnx = ConnexionBD::getInstance();
$query = "select * from user";
$response = $dbCnx->query($query);
$users = $response->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <?php foreach($users as $user): ?>
        <div class="alert alert-primary">
            <?= $user->username ?>
        </div>
    <?php endforeach; ?>
</div>

<?php
include_once ('fragments/footer.php');
?>
