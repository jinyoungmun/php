<?php
    $con=mysqli_connect("localhost", "root", "1234", "project")
    or die("MySQL 접속 실패 !!");

    session_start();

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "SELECT * FROM members WHERE id='$id'";
    $ret = mysqli_query($con, $sql);
    $d = mysqli_fetch_assoc($ret);

    if($d['pw'] == $pw){
        $_SESSION['name'] = $d['name'];
        $_SESSION['id'] = $d['id'];
        echo $_SESSION['name']." 님이 정상적으로 로그인 되었습니다.";
        echo "<br> <a href='logout.php'> 로그아웃 </a>";
    }
    else{
        echo "아이디 또는 비밀번호가 다릅니다";
    }

    mysqli_close($con);
?>