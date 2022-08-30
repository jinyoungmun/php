<?php
    $regis_num = "990116-1234567";
    sscanf($regis_num,"%6d-%7d",$a, $b);
    echo $a."<br/>";
    echo $b."<br/>";
    $data = "123 456 789";
    $datas = explode(" ",$data);
    for($c = 0; $c < 3; $c++){
        echo $datas[$c]."<br/>";
    }
    $comma_datas = implode(",",$datas);
    echo $comma_datas."<br/>";
?>