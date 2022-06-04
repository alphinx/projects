<?php
$x = 1;
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($j % 2 == 0) {
            $x = 0;
        } else {
            $x = 1;
        }
        echo $x . " ";
    }
    echo "<br>";
}
?>
