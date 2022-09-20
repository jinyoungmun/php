<?php
    $con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL 접속 실패 !!");
    $sql ="SELECT * FROM userTBL WHERE userID='".$_GET['userID']."'";

    $ret = mysqli_query($con, $sql);
    if($ret){
        $count = mysqli_num_rows($ret);
        if($count==0){
            echo $_GET['userID']."아이디의 회원이 없음!!!"."<br>";
            echo "<br> <a href='main.php'> <--초기 화면</a>";
            exit();
        }
    }
    else{
        echo "데이터 조회 실패!!!"."<br>";
        echo "실패 원인 :".mysqli_error($con);
        echo "<br> <a href='main.php' <-- 초기 화면</a>";
        exit();
    }

    $row = mysqli_fetch_array($ret);
    $userID = $row['userID'];
    $name = $row['name'];
?>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>회원정보수정화면</title>
    </head>
    <body>
        <h1> 회원 삭제 </h1>
        <form method="post" action="delete_result.php">
            아이디 : <input type="text" name="userID" value=<?php echo $userID ?> readonly> <br>
            이름 : <input type="text" name="anme" value=<?php echo $name ?> readonly> <br>
            <br><br>
            위 회원을 삭제하겠습니까?
            <input type="submit" value="회원 삭제">
        </form>
    </body>
</html>