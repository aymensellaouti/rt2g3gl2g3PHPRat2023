<?php
include_once('fragments/isAuthenticated.php');
$pageTitle = 'Home';
include_once ('fragments/header.php');
include_once 'autoload.php';
$id = htmlspecialchars($_GET['id']);
$userRepository = new UserRepository();
$user = $userRepository->findById($id);

if (!$user) {
    header("Location:users.php");
}
?>

<div class="container">
    <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header"><?=$user->username ?></div>
        <div class="card-body">
            <h5 class="card-title">Info User</h5>
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Amet assumenda atque autem deserunt dicta dolores dolorum ducimus enim esse labore magni
                maxime minima quaerat, quibusdam ratione sint vel vero voluptates?
            </p>
        </div>
    </div>
</div>

<?php
include_once ('fragments/footer.php');
?>
