
<?php
include __DIR__ ."/partials/header.php";
// var_dump($hotels);

// Filtering by Parking 
if(isset($_GET["parking"])) {
    $parking = $_GET["parking"];
    //var_dump($parking);
    $temp = [];
    // foreach($hotels as $hotel){
    //     if($hotel['parking'] === (bool) $parking){
    //         $temp[] = $hotel;
    //     }
    // }
    // $hotel = $temp;

    $hotels = array_filter($hotels, fn($item) => $parking === 'all' || $item['parking'] == $parking);
}

// Filtering by Ranking
if(isset($_GET["vote"])) {
    $vote = $_GET["vote"];
    //var_dump($vote);
    $temp = [];
    // foreach($hotels as $hotel){
    //     if($hotel['vote'] === (bool) $vote){
    //         $temp[] = $hotel;
    //     }
    // }
    // $hotel = $temp;
    
}
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
                    <span class="btn"></span></span>
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
