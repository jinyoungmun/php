<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>신규회원입력화면</title>
    </head>
    <body>
        <h1> 신규 회원 입력 </h1>
        <form method="post" action="insert_result.php">
            아이디 : <input type="text" name="userID"><br>
            이름 : <input type="text" name="name"><br>
            출생년도 : <input type="text" name="birthYear"><br>
            지역 : <input type="text" name="addr"><br>
            휴대폰 국번 : <input type="text" name="mobile1"><br>
            휴대폰 전화번호 : <input type="text" name="mobile2"><br>
            신장 : <input type="text" name="height"><br>
            <br><br>
            <input type="submit" value="회원 입력"><br>
        </form>
    </body>
</html>