<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>회원가입화면 </title>
    </head>
    <body>
        <form method="post" action="join_ok.php">
        <div>
            <label for="id">아이디</label>
            <input type="text" name="id"><p>

            <label for="pw">비밀번호</label>
            <input type="text" name="pw"><p>
                
            <label for="name">이름</label>
            <input type="text" name="name"><p>
                
            <label for="phone">전화번호</label>
            <input type="text" name="phone"><p>

            <label for="email1">이메일</label>
            <input type="text" name="email1" size="10"/>
                @ <input type="text" name="email2"
                size="15"/><p>
        </div>
        <div>
            <input type="submit" value="가입하기"/>
            <input type="reset" value="다시쓰기"/>
        </div>
    </body>
</html>