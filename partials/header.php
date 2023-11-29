
<?php
include __DIR__ ."/../model/db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php hotel</title>
</head>
<body>

    <header class="container">
        <h1>Hotels</h1>

        <h6>Search by Parking</h6>
        <form class="d-flex" role="search" action="index.php" method="GET">
            <select class="fomr-control me-2" placeholder="Search" aria-label="Search" name="parking">
                <option value="all">All</option>
                <option value="">Not Available</option>
                <option value="1">Available</option>
            </select>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <h6 class="mt-3">Search by Ranking</h6>
        <form class="d-flex mt-3" role="search" action="index.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="vote">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </header>