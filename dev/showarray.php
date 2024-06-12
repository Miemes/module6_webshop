<?php
// display_products.php

// Include het bestand met productvariabelen
include 'array.php';

// Functie om de prijs inclusief BTW te berekenen
function prijsExclusiefBTW($prijs, $btwPercentage) {
    return $prijs * (1 - $btwPercentage / 100);
}

// Functie om de prijs met korting te berekenen
function prijsMetKorting($prijs, $kortingPercentage) {
    return $prijs * (1 - $kortingPercentage / 100);
}

// Toon de gegevens van elk product
foreach ($products as $product) {
    echo "<div>";
    echo "<img src='" . $product['afbeelding'] . "' alt='" . $product['naam'] . "' style='width:200px;height:auto;'><br>";
    echo "Productnaam: " . $product['naam'] . "<br>";

    //de 2 in deze line is het aantal decimalen
    echo "Prijs inclusief BTW: €" . number_format($product['prijs'], 2) . "<br>";

    $prijsExclusiefBTW = prijsExclusiefBTW($product['prijs'], $btwPercentage);
    echo "Prijs exclusief BTW: €" . number_format($prijsExclusiefBTW, 2) . "<br>";

    if ($product['korting']) {
        $prijsMetKorting = prijsMetKorting($product['prijs'], $kortingPercentage);
        echo "Prijs na korting: €" . number_format($prijsMetKorting, 2) . "<br>";
    }

    echo "Voorraad: " . $product['voorraad'] . " stuks<br>";

    if ($product['voorraad'] >= 100) {
        echo "Voorraad: Veel op voorraad.";   
    } else if ($product['voorraad'] < 100 && $product['voorraad'] >= 1) {
        echo "Voorraad: Weinig op voorraad";
    } else {
        echo "Voorraad: Niet op voorraad";
    }
    echo "</div><br>";
}
?>