<?php
//function isTHE BLOCK OF CODE THE HELP TRO REDUCE THE NO OF COde


//function defination
function display(){
  echo'my name is shivek yadav '.'<br>';

}
//main function calling
display();
display();
display();
display();

display();



//function for the sum in which we paass the argument  and then they return value its is know as the parmetrised function
//A,B,C NIA PARAMETERV

function sum($a,$b,$c){
 $value=$a+$b+$c;
 echo'sum of you number is:-' ."".$value;


}
sum(300,400,5000);

echo"<h1>factorial<h1>";
function factorial ($n){
  $f=1;
  while($n!==0){
    $f=$f*$n;
    $n--;

     }
  return$f;

}
 echo"factorial result".factorial(6);
// arguments type
//copy by value or call by the value
//copy by refrance or call by the refrance

echo'<br>';



// Function to swap values using Call by Value
function swapValue($a, $b) {
    // Inside this function, copies of $a and $b are used
    $temp = $a;
    $a = $b;
    $b = $temp;

    // Swapped values only exist within this function scope
    echo "Inside swapValue() function:<br>";
    echo "Value of a: $a<br>";
    echo "Value of b: $b<br>";
}

// Declare original variables
$a = 10;
$b = 20;

echo "Before calling swapValue():<br>";
echo "Value of a: $a<br>";
echo "Value of b: $b<br><br>";

// Call function using Call by Value
swapValue($a, $b);

echo "<br>After calling swapValue():<br>";
echo "Value of a: $a<br>"; // Still 10
echo "Value of b: $b<br>"; // Still 20

echo'<br>';echo'<br>';echo'<br>';


// Function to swap values using Call by Reference
function swapReference(&$a, &$b) {
    // Here, $a and $b are references to the original variables
    $temp = $a;
    $a = $b;
    $b = $temp;

    // Changes reflect outside the function too
    echo "Inside swapReference() function:<br>";
    echo "Value of a: $a<br>";
    echo "Value of b: $b<br>";
}

// Declare original variables
$a = 10;
$b = 20;

echo "Before calling swapReference():<br>";
echo "Value of a: $a<br>";
echo "Value of b: $b<br><br>";

// Call function using Call by Reference
swapReference($a, $b);

echo "<br>After calling swapReference():<br>";
echo "Value of a: $a<br>"; // Now 20
echo "Value of b: $b<br>"; // Now 10




















































































?>
