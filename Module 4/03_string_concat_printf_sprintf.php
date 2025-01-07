<?php
$firstName = "Abu Hurayra";
$lastName = "Syam";

echo $firstName . $lastName;
echo "\n";
echo $firstName ." ". $lastName;
echo "\n";
echo "$firstName $lastName";
echo "\n";
echo "{$firstName} {$lastName}"; //Right
echo "\n";


$item = "Note book";
$price = 100;
$quantity = 5;
$totalPrice = $price * $quantity;

echo "The price of one {$item} is {$price} taka. And The total price of {$quantity} {$item}s is {$totalPrice} taka.";
echo "\n";

printf("The price of a %s is %d", $item, $price);
echo "\n";
printf("The price of a %s is %.2f", $item, $price);
echo "\n";

//printf formatting the output and show the output.

$result = sprintf("The price of a %s is %d", $item, $price);
echo $result;

//sprintf formatting the output but not showing the output, for showing the output at first sprintf store in a variable then echo the variable.