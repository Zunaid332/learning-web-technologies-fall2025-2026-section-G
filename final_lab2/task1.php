<?php
// ******************************
// Question 1
// Area and Perimeter of Rectangle
// ******************************
$length = 5;
$width  = 3;

$area      = $length * $width;
$perimeter = 2 * ($length + $width);

echo "<h3>1. Area and Perimeter of a Rectangle</h3>";
echo "Length = $length, Width = $width<br>";
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br><hr>";


// ******************************
// Question 2
// VAT (15%) over an amount
// ******************************
$amount  = 200;
$vatRate = 0.15;

$vat         = $amount * $vatRate;
$totalAmount = $amount + $vat;

echo "<h3>2. VAT Calculation</h3>";
echo "Amount = $amount<br>";
echo "VAT (15%) = $vat<br>";
echo "Total with VAT = $totalAmount<br><hr>";


// ******************************
// Question 3
// Check if a number is odd or even (IF-ELSE)
// ******************************
$number = 7;

echo "<h3>3. Odd or Even</h3>";
echo "Number = $number is ";
if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}
echo "<br><hr>";


// ******************************
// Question 4
// Largest of three numbers (IF-ELSE)
// ******************************
$a = 12;
$b = 25;
$c = 8;

$largest = $a;
if ($b > $largest) {
    $largest = $b;
}
if ($c > $largest) {
    $largest = $c;
}

echo "<h3>4. Largest of Three Numbers</h3>";
echo "Numbers: $a, $b, $c<br>";
echo "Largest = $largest<br><hr>";


// ******************************
// Question 5
// All odd numbers between 10 and 100 (LOOP + IF-ELSE)
// ******************************
echo "<h3>5. Odd Numbers from 10 to 100</h3>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><hr>";


// ******************************
// Question 6
// Search an element in an array (LOOP + IF-ELSE + ARRAY)
// ******************************
$arrayNumbers = array(3, 7, 9, 11, 15, 20);
$searchValue  = 11;
$found        = false;
$position     = -1;

for ($i = 0; $i < count($arrayNumbers); $i++) {
    if ($arrayNumbers[$i] == $searchValue) {
        $found    = true;
        $position = $i;
        break;
    }
}

echo "<h3>6. Search Element in Array</h3>";
echo "Array: " . implode(", ", $arrayNumbers) . "<br>";
echo "Searching for: $searchValue<br>";
if ($found) {
    echo "Result: Found at index $position<br>";
} else {
    echo "Result: Not found<br>";
}
echo "<hr>";


// ******************************
// Question 7
// Print shapes using NESTED LOOP
// ******************************
echo "<h3>7. Shapes (Nested Loops)</h3>";

// Number shape (example: 123, 12, 1)
echo "Number Shape:<br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";

// Letter shape (A, B C, D E F)
echo "Letter Shape:<br>";
$ch = ord('A');
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo chr($ch) . " ";
        $ch++;
    }
    echo "<br>";
}
echo "<hr>";


// ******************************
// Question 8
// 2D Array + NESTED LOOP to print shapes
// ******************************
echo "<h3>8. 2D Array and Shapes</h3>";

$twoDArray = array(
    array(1, 2, 3, 'A'),
    array(12, 'B', 'C', null),
    array(1, 'D', 'E', 'F')
);

echo "Shape from 2D Array:<br>";
for ($i = 0; $i < count($twoDArray); $i++) {
    for ($j = 0; $j < count($twoDArray[$i]); $j++) {
        if ($twoDArray[$i][$j] !== null) {
            echo $twoDArray[$i][$j] . " ";
        }
    }
    echo "<br>";
}
echo "<hr>";
?>
