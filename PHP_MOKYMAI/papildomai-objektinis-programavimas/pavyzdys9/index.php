<?php

include("store.php");

$stores = array(
    new Store("Maxima", array(
        new Product("Pencil", 1, 9978),
        new Product("Marker", 2.49, 547),
        new Product("Milk", 2.57, 87),
        new Product("Chips", 1.59, 788),
        new Product("Tomato", 0.99, 124)
    )),
    new Store("Lidl", array(
        new Product("Pencil", 1.09, 1487),
        new Product("Marker", 1.49, 45),
        new Product("Milk", 2.47, 78),
        new Product("Chips", 1.57, 1478),
        new Product("Tomato", 2.99, 487)
    )),
    new Store("Norfa", array(
        new Product("Pencil", 2, 4578),
        new Product("Marker", 2.49, 42),
        new Product("Milk", 1.99, 47),
        new Product("Chips", 3.22, 719),
        new Product("Tomato", 1.89, 745)
    )),
    new Store("Something", array(
        new Product("Pencil", 7, 7148),
        new Product("Marker", 5.9, 78547),
        new Product("Milk", 2.48, 7854),
        new Product("Chips", 1.57, 542),
        new Product("Tomato", 3.47, 32978)
    ))
);

function PrintAllStores($stores) {
    echo '<div class="all-stores">';
    foreach ($stores as $store) {
        echo '<div class="store">';
        $store->PrintInfo();
        echo "</div>";
    }
    echo "</div>";
}

function StoreWithGreatestProductsQuantity($stores) {
    $greatestStore = $stores[0];
    foreach ($stores as $store) {
        if ($store->AllProductsQuantity() > $greatestStore->AllProductsQuantity()) {
            $greatestStore = $store;
        }
    }
    return $greatestStore;
}

function StoreWithMostExpensiveOfCheapestProducts($stores) {
    $mostExpensive = $stores[0];
    foreach ($stores as $store) {
        if ($store->CheapestItem() > $mostExpensive->CheapestItem()) {
            $mostExpensive = $store;
        }
    }
    return $mostExpensive;
}

function GeneralStoresCalculations($stores) {
    echo '<div class="all-stores">';

    echo '<div class="store">';
    $greatestQuantityStore = StoreWithGreatestProductsQuantity($stores);
    $greatestQuantityStore->PrintInfoWithHeader("Store with greatest quantity");
    echo "</div>";

    echo '<div class="store">';
    StoreWithMostExpensiveOfCheapestProducts($stores)->PrintInfoWithHeader("Store with most expensive of cheapest product");
    echo "</div>";

    echo "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .all-stores {
            display: flex;
            flex-wrap: wrap;
        }
        .store {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            flex: 1;
            padding: 2em 4em;
            margin: 2em;
            min-width: 500px;
        }
    </style>
</head>
<body>
    <?php
        PrintAllStores($stores);
        GeneralStoresCalculations($stores);
    ?>
</body>
</html>