
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

// Filtering by Rate
function filter_by_vote($hotel){
    if(isset($_GET['vote'])){
        $vote = $_GET['vote'];
        if ($vote === '') {
            return true;
        } else {
            return $hotel['vote'] == $vote; 
        }
    }
    return true; 
}

if(isset($_GET["vote"])) {
    $hotels = array_filter($hotels, 'filter_by_vote');
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
