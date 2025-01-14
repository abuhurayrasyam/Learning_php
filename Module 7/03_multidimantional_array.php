<!-- In array another array -->
<?php
$students = [
    "Abu" => [
        "age" => 21,
        "class" => 11,
        "Roll" => 01
    ],
    "Hurayra" => [
        "age" => 22,
        "class" => 12,
        "Roll" => 02
    ]
    ];

foreach($students as $key => $value){
    echo $key."\n";
    foreach($value as $details){
        echo $details."\n";
    }
}