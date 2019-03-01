<?php 
$title = 'Cars';
require_once '../shared/header.php';
require_once '../shared/sessions.php';
require_once '../shared/db.php';
?>

<div class="container">
    <h1>Cars in the workshop</h1>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Status</th>
            <th>
                <a href="/cars/create.php" class="btn btn-success">+</a>
            </th>
        </tr>
        <?php
            $cars = $car_model->all();
            if ($cars) {
                foreach ($cars as $car) {
                    require './row.php';
                }
            }
        ?>
    </table>
</div>

<?php require_once '../shared/footer.php' ?>