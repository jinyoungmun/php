<?php
 $con=mysqli_connect("localhost","root","root") or die("MySQL 접속 실패");
phpinfo();
mysqli_close($con);
?>