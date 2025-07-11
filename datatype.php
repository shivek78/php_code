<!-- php has 8 type ogf data and futer its dived in 3 part
scalar int ,float ,string boolen
compound array,object,
special resourse and null
-->
<?php
echo "<h3>Scalar Types</h3>";

// Integer
$age = 30;
echo "Integer: " . $age . "<br>";

// Float
$salary = 55000.75;
echo "Float: " . $salary . "<br>";

// String
$name = "Alice";
echo "String: " . $name . "<br>";

// Boolean
$isEmployed = true;
echo "Boolean: " . $isEmployed . "<br>"; // Will show 1

echo "<h3>Compound Types</h3>";

// Array
$skills = ["PHP", "JavaScript", "SQL"];
echo "Array Element: " . $skills[1] . "<br>"; // Outputs JavaScript

// Object
class Book {
  public $title = "PHP Essentials";
}
$myBook = new Book();
echo "Object Property: " . $myBook->title . "<br>";

echo "<h3>Special Types</h3>";

// NULL
$middleName = NULL;
echo "Null Value: " . $middleName . "<br>"; // Outputs nothing

//rsource
$file = fopen("demo.txt","r");

echo "Resource: " . get_resource_type($file) . "<br>"; // Outputs something like "stream"
fclose($file); // Don't forget to close the file!
?>


