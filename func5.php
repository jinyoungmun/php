<?php
    function hap($a,$b){
        $sum=0;
        while($a<=$b){
            $sum+=$a;
            $a++;
        }
        return $sum;
    }
    $total=hap($from=1,$to=100);
    echo "$from 에서 $to 까지의 합 : $total";
?>