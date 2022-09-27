<?php
    $con=mysqli_connect("localhost", "root", "1234", "project")
    or die("MySQL 접속 실패 !!");

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email1"]."@".$_POST["email2"];

    $sql = "INSERT INTO members VALUES
    ('".$id."', '".$pw."', '".$name."', '".$phone."', '".$email."')";

    $ret = mysqli_query($con, $sql);

    if($ret){
        echo "데이터가 성공적으로 입력됨.";
    }
    else{
        echo "데이터 입력 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
    }
    mysqli_close($con);

    echo "<br><a href='join.php'> <--초기 화면</a>";
    echo "<br><a href='login.php'> <--로그인 화면</a>";
?>