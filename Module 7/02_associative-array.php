<!-- Associative Array (key with value / dictionary) --> 
<?php

$fruits = [
    "mango"=>"Amm", //key => value
    "grape"=>"Angur",  
    "apple"=>"Appel", 
    "banana"=>"Kola", 
    "orange"=>"Komla"
];

$fruits["watermelon"] = "Tormuj"; //array element add to last of array
print_r($fruits);
echo "<br>"."<br>";

$fruits["mango"] = "am"; //array element change/modify using key of array
print_r($fruits);
echo "<br>"."<br>";

unset($fruits["apple"]); // array element remove using key of array
print_r($fruits);
echo "<br>"."<br>";

echo $fruits["mango"]; //array's item find/print using key of array.
echo "<br>"."<br>";

foreach($fruits as $key=>$value){
    echo "The bangla translation of {$key} is {$value} .<br>";
}
echo "<br>"."<br>";

$keys = array_keys($fruits); // keys array
$values = array_values($fruits); //values array

print_r($keys);
print_r($values);


$array_flips = array_flip($fruits); //array flips / position change key go values place and value go to keys places
print_r($array_flips);
