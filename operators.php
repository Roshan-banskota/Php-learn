<?php
$x=5;
$y=10;
$c=$x*$y;
echo "Addition of the two values is: ".$c;
echo"<br>";
$c=$y%$x;
echo "Modulus  of the two values is: ".$c;
echo"<br>";
$c=$x/$y;
echo "Division of the two values is: ".$c;
echo"<br>";
$c=$x**$y;
echo "Exponent value is: ".$c;

echo"<br>";
//Comparision Operator

$p=20;
$q=20;
$m=29;
$r=$p==$q;
$n=$p==$m;

echo "value of r is: ".$r	;  //IT Gives 1 result  because both value are equal.
echo"<br>";
echo "value of n is: ".$n ;	//.it gives nothing because value of $p and $m are not equal
echo"<br>";
//Identical
$p="20";
$q=20;

$r=$p===$q;


echo "value of r is: ".$r	;

echo"<br>";
//Increment and decrement opertor
echo $p++;
echo"<br>";
echo $p; //because ++(post increment) return the original value of $p and add 1 so $p gives 21.
echo"<br>";
echo ++$m;
echo"<br>";
echo $m;
?>

<?php
//assignment operator
$x = 10;
echo $x; // Outputs: 10
echo"<br>";
 
$x = 20;
$x += 30;
echo $x; // Outputs: 50
echo"<br>";
 
$x = 50;
$x -= 20;
echo $x; // Outputs: 30
echo"<br>";
 
$x = 5;
$x *= 25;
echo $x; // Outputs: 125
echo"<br>";
 
$x = 50;
$x /= 10;
echo $x; // Outputs: 5
echo"<br>";
 
$x = 100;
$x %= 15;
echo $x; // Outputs: 10
echo"<br>";
?>

<?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y);  // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x < $y);   // Outputs: boolean true
var_dump($x > $y);   // Outputs: boolean false
var_dump($x <= $y);  // Outputs: boolean true
var_dump($x >= $y);  // Outputs: boolean false
echo"<br>";
?>

<?php
//logical operator
$year = 2019;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
?>