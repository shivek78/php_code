<?php
echo'-------------------------------------------------------------------------------';
echo'arthmetica operater';
echo'-------------------------------------------------------------------------------';
$a = 10;
$b = 20;

$addtion = $a + $b;
$subtracts = $a - $b;
$multiple = $a * $b;
$divid = $a / $b;
$expnonal = $a ** $b;

echo 'Sum of the number: ' . $addtion . '<br>';
echo 'Multiplication of the number: ' . $multiple . '<br>';
echo 'Subtraction of the number: ' . $subtracts . '<br>';
echo 'Division of the number: ' . $divid . '<br>';
echo 'Exponential of the number: ' . $expnonal . '<br>';
echo'-------------------------------------------------------------------------------';
echo "<h1>Assignment Operators</h1>";
echo'-------------------------------------------------------------------------------';
// Start with a default value
$a = 10;
echo "Original value: a = $a<br>";

// Basic assignment (=): assigns 5 to $a
$a = 5;
echo "a = 5 → $a<br>";

// Addition assignment (+=): adds 3 to $a (5 + 3 = 8)
$a += 3;
echo "a += 3 → $a<br>";

// Subtraction assignment (-=): subtracts 2 from $a (8 - 2 = 6)
$a -= 2;
echo "a -= 2 → $a<br>";

// Multiplication assignment (*=): multiplies $a by 4 (6 * 4 = 24)
$a *= 4;
echo "a *= 4 → $a<br>";

// Division assignment (/=): divides $a by 2 (24 / 2 = 12)
$a /= 2;
echo "a /= 2 → $a<br>";

// Modulus assignment (%=): gives remainder of $a divided by 3 (12 % 3 = 0)
$a %= 3;
echo "a %= 3 → $a<br>";

echo "<h2>String Concatenation</h2>";

// Initialize a string
$text = "Hello";

// Concatenation assignment (.=): appends another string to $text
$text .= " World"; // Now $text is "Hello World"
echo 'text .= " World" → ' . $text . "<br>";
echo'-------------------------------------------------------------------------------';
echo'<h1>Relational oprater<h1>';
echo'-------------------------------------------------------------------------------';
echo '= ,==,!= ,!== ,>,<,>=,<=';


$num = 5;
$str = "5";

// Loose comparison (only values are compared)
if ($num == $str) {
    echo "Loose comparison: Equal\n";  // true
} else {
    echo "Loose comparison: Not equal\n";
}

// Strict comparison (value and type must match)
if ($num === $str) {
    echo "Strict comparison: Equal\n";
} else {
    echo "Strict comparison: Not equal\n";  // false
}
echo'-------------------------------------------------------------------------------';
echo "<h1>logical oprater";
echo'-------------------------------------------------------------------------------';


$a = 5;
$b = 10;

if ($a == 5 && $b == 10) {
    echo "Both conditions are true\n";
}

if ($a == 5 || $b == 15) {
    echo "At least one condition is true\n";
}

if (!($a == 6)) {
    echo "Negation is true\n";
}

echo'-------------------------------------------------------------------------------';
echo "<h1>shivek<h1>";
echo'-------------------------------------------------------------------------------';





?>
