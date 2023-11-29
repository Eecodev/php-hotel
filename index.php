
<?php
include __DIR__ ."/partials/header.php";
// var_dump($hotels);



?>

    <main class="container">


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel){ ?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name']?></th>
                        <td><?php echo $hotel['description']?></td>
                        <td><?php echo $hotel['parking']?></td>
                        <td><?php echo $hotel['vote']?></td>
                        <td><?php echo $hotel['distance_to_center']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
