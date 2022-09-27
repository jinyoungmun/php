<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>로그인화면 </title>
    </head>
    <body>
        <form method="post" action="login_ok.php">
        <div>
            <label for="id">아이디</label>
            <input type="text" name="id"><p>

            <label for="pw">비밀번호</label>
            <input type="text" name="pw"><p>
        </div>
        <div>
            <input type="submit" value="로그인"/>
            <input type="reset" value="다시쓰기"/>
            <a href="join.php"><input type="button" value="회원가입"/></a>
        </div>
        </form>
    </body>
</html>