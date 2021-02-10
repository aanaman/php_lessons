<?php 

// user defines functions
// function myFunc() {
//     echo "this is a function";
// }

// myFunc();

//functions with arguments
// function myFunc($name, $age, $location) {
//     echo "my name is ".$name. " my age is ".$age." and i live in ".$location;
// }

// myFunc("Abdullah", 12, "Ghana");


//functions with default arguments
// function myFunc($name="Abdullah") {
//     echo $name;
// }

// myFunc();
// myFunc(" Anaman");


//returning values from a function
function myFunc($x, $y) {
    $z = $x + $y;
    return $z;
}

$total = myFunc(23,56);
echo $total+1;

?>