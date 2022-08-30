<?php
    $fn = "hello.txt";
    $fp = fopen($fn, "r");
    while(!feof($fp)){
        $line=fgets($fp, 80);
        echo "읽어 온 내용 : $line <br/>";
    }
    fclose($fp);
?>