<?php
    $con= mysqli_connect("localhost", "root", "1234", "world") or die("MySQL 접속 실패 !!");

    echo "MySQL 접속 완전히 성공!!";

    mysqli_close($con);
?>