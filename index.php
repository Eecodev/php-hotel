
<?php
include __DIR__ ."/partials/header.php";
// var_dump($hotels);



?>

    <main class="container">
        <div>
            <?php foreach($hotels as $hotel){ ?>
                <ul>
                    <li><?php echo $hotel['name']?></li>
                    <li><?php echo $hotel['description']?></li>
                    <li><?php echo $hotel['parking']?></li>
                    <li><?php echo $hotel['vote']?></li>
                    <li><?php echo $hotel['distance_to_center']?></li>
                </ul>
            <?php } ?>
        </div>
    </main>
