<?php

echo"<br>";
echo"<br>";

$x = 228;
$y = 300;
echo "<h3>1. Find and display all numbers between 228 and 300.<br></h3>";

for( $i=$x; $i<=$y; $i++ ) {

	echo "$i, ";
}
echo"<br>";
echo"<br>";

echo "<h3>2. Display the sum of numbers between 228 and 300.<br></h3>";
$sum = 0;
for($i=$x; $i<=$y; $i++) {
	$sum +=$x;
}
echo "The sum of the numbers $x to $y is $sum";

echo "<br>";
echo "<br>";

echo "<h3>3. Find and display the numbers that are divisible by 4(from the result in #1).<br></h3>";

for($i=$x;$i<=$y;$i++) {
    if($i%4==0)
        echo "$i, ";
}


for ($i=$x; $i $x ; $i+$x) { 
	
}

?>
