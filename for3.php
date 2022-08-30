<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>▶ 게시판 목록 보기</h1>
        <table border="1" width="600">
            <tr bgcolor="##ccccc" align="center">
                <th>번호</th>
                <th>제목</th>
                <th>글쓴이</th>
                <th>날짜</th>
            </tr>
            <?php
                $num=1;
                $name=array("권00","김00","남00","노00","박00","손00");
                $date="2021/10/01";
                for($i=0; $i<=5; $i++){
                    $title="게시판제목".$num;
                    echo ("<tr>
                        <td width='50' align='center'>$num</td>
                        <td>$title</td>
                        <td width='50'>$name[$i]</td>
                        <td width='80'>$date</td>
                       </tr>");
                    $num++;
                }
            ?>
        </table>
    </body>
</html>