<!-- In PHP, a function is a block of code that you can reuse to perform a specific task. Functions help to organize and modularize code, making it easier to maintain and reuse. Here’s a simple example: -->

<?php
function printStar(){
    $star = 5;
    for ($i = 1; $i <= $star; $i+=1){
        echo "*";
    }
    echo "<br>";
}


echo "This is a Heading";echo "<br>";
printStar();

echo "<br>";

echo "This is a Paragraph";echo "<br>";
printStar();


function printStars($starCount){
    for ($i = 1; $i <= $starCount; $i+=1){
        echo "*";
    }
    echo "<br>";
}


echo "This is a Heading";echo "<br>";
printStars(14);

echo "<br>";

echo "This is a Paragraph";echo "<br>";
printStars(16);
echo "<br>";

// Variable Scope in function
// 1. local Scope 
// 2. Global scope 
// 3. super global scope

// local Scope
// Variables declared inside a function have a local scope, meaning they can only be worked within that function.
function greet(){
    $message= "Hello World 01";
    echo $message;
}

function greet1(){
    $message= "Hello World 02";
    echo $message;
}

greet();
echo "<br>";
greet1();
echo "<br>";

// Global scope
// Variables declared outside of any function have a global scope, meaning they can be accessed anywhere in the script, except inside functions. when you use the global scope or variable you have to add at first global key word in  the function.

$x=10;
$y=5;
function addTwo(){
    global $x,$y;
    echo $x+$y;
}

function subTwo(){
    global $x,$y;
    echo $x-$y;
}

addTwo();
echo "<br>";
subTwo();
echo "<br>";

// Super global scope
// Superglobals are built-in variables that are always accessible, regardless of scope. They are predefined arrays in PHP. when you use the global scope or variable you do not have to add at first global key word in  the function.
// $_GET: Used to collect form data sent with GET method.
// $_POST: Used to collect form data sent with POST method.
// $_SESSION: Used to store session variables.
// $_COOKIE: Used to retrieve cookie values.



// Recursive Function
// A recursive function is a function that calls itself.

function countDown($x){
    if($x<=0){
        return $x;
    }
    echo $x . "<br>";
    countDown($x-1);
}

countDown(10);


// Divide large function into small function
// example: a login task
// 1. email validation 
// 2. password validation 
// 3. email password matching 
// 4. user login

function loginUser($username, $password){
    if(validUserName($username)){
        echo "Failed Username";
    }
    else if(validPassword($password)){
        echo "Failed Password";
    }
    else if(!matchingUsernamePassword($username, $password)){
        echo "Failed Matching Username and Password";
    }
    else{
        login();
    }
}

function validUserName($username){
    if(empty($username)){
        return true;
    }
    else{
        return false;
    }
}

function validPassword($password){
    if(empty($password)){
        return true;
    }
    else{
        return false;
    }
}

function matchingUsernamePassword($username,$password){
    if($username=="abc" && $password=="123"){
        return true;
    }
    else{
        return false;
    }
}

function login(){
    echo "Login Successful";
}

loginUser("abc", "123");