<!-- Index based Array (just value) -->
<?php
$names = array("Abu", "Hurayra", "Syam"); //Old Method
$names = ["Abu", "Hurayra", "Syam"]; //New Method
print_r($names); //for print a arrays all index.
echo "<br>"."<br>"; 

$names[] = "Cat"; //array push(+) to last index (un remended)
print_r($names);
echo "<br>"."<br>";

array_push($names, "Push"); //array push(+) to last index
print_r($names);
echo "<br>"."<br>";

array_unshift($names, "Unshift"); //array unshift(+) to first index
print_r($names);
echo "<br>"."<br>";

array_splice($names,3,0,"Splice"); //item add in the any middle place of array
print_r($names);
echo "<br>"."<br>";

array_splice($names,3,1); //item remove in the any middle place of array
print_r($names);
echo "<br>"."<br>";

array_pop($names); //array pop(-) from last index
print_r($names);
echo "<br>"."<br>";

array_shift($names); // array shift(-) from first index
print_r($names);
echo "<br>"."<br>";

$names[3] = "Replace"; //change/replace the item using index number
print_r($names);
echo "<br>"."<br>";

//-----------------------------------------------------//

$fruits = ["mango", "grape",  "apple", "banana", "orange"];

$length = count($fruits);
echo $length ."<br>"."<br>"; //total index/item of array.

echo $fruits[0] ."<br>"."<br>"; //array's item find/print using index number of array.

for($i = 0; $i < $length; $i++){
    echo $fruits[$i] ."<br>";
} // all arrays element print.
echo "<br>"."<br>";

sort($fruits); //sorting the array
print_r($fruits);
echo "<br>"."<br>";

rsort($fruits); //revers sorting the array
print_r($fruits);
echo "<br>"."<br>";

//---------------array merge-------------------//
$old_fruits = ["banana", "coconut", "pepe"];
$new_fruits = ["apple", "orange", "grave"];

$all_fruits = array_merge($old_fruits, $new_fruits);
print_r($all_fruits);
echo "<br>"."<br>";

//-----------common and unique items-----------//
$class_11 = ["A", "B", "C", "D", "C"];
$class_12 = ["E", "F", "D", "G", "H"];

$common_items = array_intersect($class_11, $class_12); //common items-
print_r($common_items);
echo "<br>"."<br>";

$class12_unique_name_from_class1112 = array_diff($class_12, $class_11); //unique items from multiple array
print_r($class12_unique_name_from_class1112);
echo "<br>"."<br>";

$class11_unique_name_from_class11 = array_unique($class_11); //unique items from single array
print_r($class11_unique_name_from_class11);
echo "<br>"."<br>";


//-----------A sentence convert to array-----//
$sentence = "I Love You so much";

$words = explode(" ", $sentence);
print_r($words);
echo "<br>"."<br>";


//------how to search on array---------//
$class_1 = ["A", "B", "C", "D", "E", "F", "G", "H"];
$position_of_A = array_search("A", $class_1);
print_r($position_of_A);
echo "<br>"."<br>";

if(!$position_of_A){ // ! use for false and its just use for index 0
    echo "A is found at position $position_of_A";
}
else{
    echo "A is not found";
}