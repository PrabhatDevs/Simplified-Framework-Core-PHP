<?php
include_once base_path('app/Views/layouts/header.view.php');
include_once base_path('app/Views/layouts/navbar.view.php');
?>

<div class="container mt-4 mb-4">
    <h2>Users List</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $user['name']??'' ?></td>
                        <td><?= $user['email']??'' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include_once base_path('app/Views/layouts/footer.view.php') ?>
