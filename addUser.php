<?php
session_start();
$pageTitle = 'Add User';
include_once ('fragments/header.php');
?>
    <div class="container">
        <form action="processAddUser.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">role</label>
                <select name="role" class="form-control" id="role">
                    <option value="admin">ADMIN</option>
                    <option value="user">USER</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
include_once ('fragments/footer.php');
?>