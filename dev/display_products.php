<?php

//include het bestand met variabelen
include 'variabelen.php';

//functie on de prijs exclusief BTW te berekenen
function prijsExclusiefBTW ($prijs, $btwFactor) 
{
  return $prijs * (1 - $btwFactor);
}

//functie om de prijs met korting te berekenen
function prijsMetKorting ($prijs, $kortingFactor)
{
  return $prijs * (1 - $kortingFactor);
}

// Toon de gegevens van product 1 met de echofunctie
echo "<div>";
echo "Product 1:<br>";
echo "<img src='" . $product1Afbeelding . "' alt='" . $product1Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product1Naam . "<br>";
echo "Prijs: €" . $product1Prijs . "<br>";
echo "Voorraad: " . $product1Voorraad . " stuks<br>";

// Toon de gegevens van product 2 met de echofunctie
echo "<div>";
echo "Product 2:<br>";
echo "<img src='" . $product2Afbeelding . "' alt='" . $product2Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product2Naam . "<br>";
echo "Prijs: €" . $product2Prijs . "<br>";
echo "Voorraad: " . $product2Voorraad . " stuks<br>";

// Toon de gegevens van product 3 met de echofunctie
echo "<div>";
echo "Product 3:<br>";
echo "<img src='" . $product3Afbeelding . "' alt='" . $product3Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product3Naam . "<br>";
echo "Prijs: €" . $product3Prijs . "<br>";
echo "Voorraad: " . $product3Voorraad . " stuks<br>";

// Toon de gegevens van product 4 met de echofunctie
echo "<div>";
echo "Product 4:<br>";
echo "<img src='" . $product4Afbeelding . "' alt='" . $product4Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product4Naam . "<br>";
echo "Prijs: €" . $product4Prijs . "<br>";
echo "Voorraad: " . $product4Voorraad . " stuks<br>";

// Toon de gegevens van product 5 met de echofunctie
echo "<div>";
echo "Product 5:<br>";
echo "<img src='" . $product5Afbeelding . "' alt='" . $product5Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product5Naam . "<br>";
echo "Prijs: €" . $product5Prijs . "<br>";
echo "Voorraad: " . $product5Voorraad . " stuks<br>";

// Toon de gegevens van product 6 met de echofunctie
echo "<div>";
echo "Product 6:<br>";
echo "<img src='" . $product6Afbeelding . "' alt='" . $product6Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product6Naam . "<br>";
echo "Prijs: €" . $product6Prijs . "<br>";
echo "Voorraad: " . $product6Voorraad . " stuks<br>";

// Toon de gegevens van product 7 met de echofunctie
echo "<div>";
echo "Product 7:<br>";
echo "<img src='" . $product7Afbeelding . "' alt='" . $product7Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product7Naam . "<br>";
echo "Prijs: €" . $product7Prijs . "<br>";
echo "Voorraad: " . $product7Voorraad . " stuks<br>";

// Toon de gegevens van product 8 met de echofunctie
echo "<div>";
echo "Product 8:<br>";
echo "<img src='" . $product8Afbeelding . "' alt='" . $product8Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product8Naam . "<br>";
echo "Prijs: €" . $product8Prijs . "<br>";
echo "Voorraad: " . $product8Voorraad . " stuks<br>";

// Toon de gegevens van product 9 met de echofunctie
echo "<div>";
echo "Product 9:<br>";
echo "<img src='" . $product9Afbeelding . "' alt='" . $product9Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product9Naam . "<br>";
echo "Prijs: €" . $product9Prijs . "<br>";
echo "Voorraad: " . $product9Voorraad . " stuks<br>";

// Toon de gegevens van product 10 met de echofunctie
echo "<div>";
echo "Product 10:<br>";
echo "<img src='" . $product10Afbeelding . "' alt='" . $product10Naam . "' style='width:200px;height:auto;'><br>";
echo "Productnaam: " . $product10Naam . "<br>";
echo "Prijs: €" . $product10Prijs . "<br>";
echo "Voorraad: " . $product10Voorraad . " stuks<br>";
?>