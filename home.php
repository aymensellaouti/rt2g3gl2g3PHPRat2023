<?php
    include_once('fragments/isAuthenticated.php');
    $pageTitle = 'Home';
    include_once ('fragments/header.php');
?>

<div class="container">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Bienvenu</div>
        <div class="card-body">
            <h5 class="card-title"><?= $_SESSION['username'] ?></h5>
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa debitis hic ipsum laboriosam possimus quas! Autem error fuga, laborum nihil odio quaerat recusandae rerum saepe ullam voluptatum. Nulla, quibusdam.
            </p>
        </div>
    </div>
</div>

<?php
    include_once ('fragments/footer.php');
?>
