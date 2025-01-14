<?php
// loop. loop mean a part of codes use another places. In php loop has some variant. For loop, while loop, do while loop.

//for loop
for ($i = 100; $i <= 150; $i++){
    if($i % 2 == 0){
        echo $i . "\n";
    }
}

echo "\n";

for ($i = 100; $i <= 150; $i+=3){
    echo $i . "\n";
}

echo "\n";

$star = 19;
echo "This is a Heading";echo "\n";
for ($i = 1; $i <= $star; $i+=1){
    echo "*";
}
echo "\n";
echo "This is a Paragraph";echo "\n";
for ($i = 1; $i <= $star; $i+=1){
    echo "*";
}
echo "\n";

//while loop
$i = 1;
    while($i <= 10){
        echo "x" . "\n";
        $i++;
    }

echo "\n";

//do while loop
$i =1;
do{
    echo "x" . "\n";
    $i++;
}while($i <= 10);

echo "\n";

//for etch loop
$fruits = ["apple", "banana", "orange"];
forEach($fruits as $fruits){
    echo $fruits . "\n";
}
echo "\n";

$i = 0;
while(true){
    if ($i == 21){
        break;
    }
    $i++;
    echo $i . "\n";
}

echo "\n";

for($i=1;$i<=30;$i++){
    if($i % 3 == 0){
        continue;
    }
    echo "{$i} is not devisible by 3\n";
}

$students = [
    ["Student A", "M"],
    ["Student B", "F"],
    ["Student C", "F"],
    ["Student D", "F"],
    ["Student E", "M"],
];
foreach($students as $student){
    if($student[1] == "F"){
        continue;
    }
    echo $student[0] . "\n";
}

foreach($students as $student){
    if($student[1] == "F"){
        echo "{$student[0]}" . "\n";
    }
}

