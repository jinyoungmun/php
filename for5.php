<?php
for($a=1; $a<=6; $a++){
    for($b=0; $b<=6-$a; $b++){
        echo "♡";
    }
    for($c=0; $c<=$a*2; $c++){
        echo "♥";
    }
    echo "<br>";
}
?>