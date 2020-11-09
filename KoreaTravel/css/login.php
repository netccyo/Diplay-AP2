<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="ko">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>로그인페이지</title>
</head>
<body> 
    <form action="login_ok.php" method="post"> 
        <div class="form-group"> 
            <label for="id">아이디</label> 
            <input type="text" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="pass">비밀번호</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="로그인">
    </form>
</body>
</html>