<?php
//if else
$age = 45;

if($age<50){
    echo "You are Young man.";
}
else{
    echo "You are old man.";
}
echo "<br>";

//else if ladder
$marks = 95;

if($marks<=100 && $marks>=80){
    echo "A+";
}
else if($marks<80 && $marks>=70){
    echo "A";
}
else if($marks<70 && $marks>=60){
    echo "A-";
}
else{
    echo "F";
}

echo "<br>";

//Switch Case
switch(true){
    case($marks<=100 && $marks>=80):
        echo "A+";
    break;

    case($marks<80 && $marks>=70):
        echo "A";
    break;

    case($marks<70 && $marks>=60):
        echo "A-";
    break;
    
    default:
        echo "F";
    break;
}

echo "<br>";

//Nested if else
if($marks<=100 && $marks>=80){
    echo "A+";
}
else{
    if($marks<80 && $marks>=70){
        echo "A";
    }
    else{
        if($marks<70 && $marks>=60){
            echo "A-";
        }
        else{
            echo "F";
        }
    }
}

echo "<br>";

//Shorthand if else / Ternary Operator / Inline If else
$age = 18;

$vote= ($age>=18)? "YES" : "NO";
echo $vote;
?>
