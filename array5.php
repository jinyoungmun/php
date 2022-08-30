<?php
    $cars=array(array("volvo","스웨덴",300),
        array("BMW","독일",250),
        array("saab","스웨덴",350),
        array("KIA","한국",200));
    for($row=0; $row<4; $row++){
        echo"<p><b>Row number $row</b></p>";
        echo"<ul>";
        for($col=0; $col<3; $col++){
            echo"<li>".$cars[$row][$col]."</li>";
        }
        echo"</ul>";
    }
?>