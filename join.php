<!DOCTYPE html>
    <head>
        <title> FORM 태그를 이용한 회원 가입 </title>
    </head>
    <body>
        <form action="member.php" method="post">
        <table class="join" cellpadding = "7" cellspacing = "10">
            <tr>
                <th><label for = "id">아이디</label></th>
                <td><input type="text" name="id" id="id"/></td>
            </tr>
            <tr>
                <th><label for = "pw">비밀번호</label></th>
                <td><input type="password" name="pw" id="pw"/></td>
            </tr>
            <tr>
                <th><label for = "name">이름</label></th>
                <td><input type="text" name="name" id="name" size="10"/></td>
            </tr>
            <tr>
                <th><label for = "email1">이메일</label></th>
                <td><input type="text" name="email1" id="email1" size="10"/>
                @<input type="text" name="email2" id="email2" size="15"/></td>
            </tr>      
        </table>
        </div>
        <div>
            <input type="submit" value="가입하기"/>
            <input type="reset" value="다시쓰기"/>
        </div>
    </body>
</html>