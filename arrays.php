<?php
// Arrays are collections of similar or heterogeneous data stored in a single variable
// There are two types of arrays in PHP:
// 1. Indexed arrays
// 2. Associative arrays

// Indexed array example
$ar = array("Ludhiana", "Delhi", "Jaipur", "Agra");

// Using for loop to print array elements
echo "<h1>Using for loop</h1>";
for ($i = 0; $i < count($ar); $i++) {
    echo $ar[$i] . "<br>";
}

// Resetting index for while loop
$i = 0;
echo "<h1>Using while loop</h1>";
while ($i < count($ar)) {
    echo $ar[$i] . "<br>";
    $i++;
}
echo "<h1>array slice </h1>";
$newArray=array_slice($ar,1,2,true);
print_r($newArray) ;

/*
arrays inbuild function
Common PHP Array Functions
array_intersect() → Returns common values from multiple arrays.

array_diff() → Returns values in one array that are not present in the others.(done)

array_unique() → Removes duplicate values from an array.

array_merge() → Combines two or more arrays into one.

array_slice() → Extracts a portion of an array.

array_splice() → Removes and replaces elements from an array.

in_array() → Checks if a value exists in an array.

array_search() → Searches for a value and returns the corresponding key.

array_filter() → Filters elements of an array using a callback function.

array_keys() → Returns all the keys from an array.

array_values() → Returns all the values from an array.

array_flip() → Exchanges keys with their corresponding values.

array_push() → Adds one or more elements to the end of an array.

array_pop() → Removes and returns the last element of an array.

array_shift() → Removes and returns the first element of an array.

array_unshift() → Adds one or more elements to the beginning of an array.

array_reverse() → Returns an array with elements in reverse order.

array_combine() → Creates an associative array using one array for keys and another for values.

sort() → Sorts an indexed array in ascending order.

rsort() → Sorts an indexed array in descending order.

asort() → Sorts an associative array by values (maintains key association).

ksort() → Sorts an associative array by keys.

count() → Returns the number of elements in an array.
*/

$fruits = array("apple", "banana", "red","cherry", "date", "fig");

$colors = array("red", "green", "blue", "yellow","apple");

$numbers = array(9, 2, 6, 4, 5,10,20);

$mix = array("apple", 2, "banana", 4, "cherry");

$days1 = array("Mon", "Tue", "Wed", "Thu", "Fri");
$days2 = array("Wed", "Thu", "Fri", "Sat", "Sun");

$assocArray = array(
    "name" => "Amit",
    "age" => 30,
    "city" => "Delhi"
);

echo'<h2>its provide the commen arrays<h2>';
$newintersectarrays=array_intersect($fruits,$colors);
print_r($newintersectarrays);
echo'<br>';echo'<br>';echo'<br>';echo'<br>';
//--------------------------------------------------------------------------------------------------------//
echo'<h2>array_diff() → Returns values in one array that are not present in the others.<h2>';
$newarraydiff=array_diff($fruits,$colors);
print_r($newarraydiff);
echo'<br>';echo'<br>';echo'<br>';echo'<br>';
//------------------------------------------------------------------------------------------------------//
sort( $numbers);
print_r($numbers);
echo'<br>';echo'<br>';
//===============================================================//
rsort($numbers);
print_r($numbers);
echo'<br>';echo'<br>';
//______________________________________________________//
//push operation
array_push($numbers,20,30,50,90,100,200);
print_r($numbers);
//______________________________________________________//
echo'<br>';echo'<br>';

//pop operation
array_pop($numbers);       // Removes the last item (e.g., 20 if unchanged)
print_r($numbers);// Displays the updated array
echo'<br>';echo'<br>';echo'<br>';
$key = array_search(200, $numbers);
if ($key !== false) {
    unset($numbers[$key]); // Removes the element at that key
}
print_r($numbers);



echo'<br>';echo'<br>';echo'<br>';
?>
