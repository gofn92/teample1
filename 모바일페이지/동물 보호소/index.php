<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login.html </title>
    <style>
        *{margin:0 auto; padding:0; box-sizing: border-box; text-align: center;}
        li{list-style: none;}
        a{
            text-decoration: none;
            color : black;
        }
        #container {
            width : 960px;
        }
        header {
            width : 100%;
            height : 100px;
            border-bottom : 2px solid gray;
        }
        section {
            height : 600px;
            padding : 50px;
        }
        form {
            width : 400px;
        }
        section input {
            width : 300px;
            height : 50px;
            text-align: left;
            border : 1px solid green;
            /* background-color: lightgreen; */
            cursor: pointer;
            margin-bottom: 10px;
        }
        section input:focus {
            outline: 2px solid green;
        }
        #submit {
            background-color: white;
            text-align: center;
        }
        #logchk{
            width : 100px;
            margin-left : -200px;
        }
        #logchk input{
            height : 20px;
            width : 20px;
        }
        li a:focus{
            background-color: greenyellow;
        }
        section ul {
            width : 300px;
        }
        section ul li a{
            float: left;
            width : 135px;
            height : 30px;
            border : 1px solid green;
            margin-left: 12px;
        }
        section ul li a::after{
            content: "";
            display: block;
            clear : both;
        }
        footer {
            width : 100%;
            height : 100px;
            border-top: 2px solid gray;
        }
        footer li{
           float : left;
       }
       footer::after{
           content : "";
           clear : both;
       }
       @media screen and (max-width: 350px) {
           #container {
               width : 320px;
           }
           section {
               width : 300px;
               height : 350px;
               padding : 0px;
               margin : 0 auto;
           }
           section ul li a {
            margin-left: 10px;

           }
           form {
               width : 300px;
               margin : 0;
           }
           form input {
               width : 200px;
           }
           footer {
            height : 200px;

           }
           footer li{
           clear : both;
       }
       }
    </style>
</head>
<body>
    <div id="container">
    <!-- container 시작 -->
        <header>
            <!-- header 시작 -->
            Tierheim
        </header>
            <!-- header 끝 -->
        <section>
            <!-- section 시작 -->
            <h1>로그인</h1><br>
            <form method="POST" action="loginCheck.php" name="signIn" autocomplete="off" onsubmit="return check()">
                <input type="text" name="u_id" placeholder="아이디"><br>
                <input type="password" name="u_pw" placeholder="비밀번호"><br><br>
                <input type="submit" value="로그인" id="submit"><br>
                <!-- <label id="logchk"><input type="checkbox" name="logchk">ID 기억하기</label> -->
            </form><br>
            <ul>
                <li><a href="#"> id / pw 찾기 </a></li>
                <li><a href="#"> 회원가입 </a></li>
            </ul>
        </section>
            <!-- section 끝 -->
        <footer>
            <div>
                <ul>
                    <li> 운영시간 : 00:00~00:00 </li><br>
                    <li> 토/일 공휴일 휴무 </li><br>
                    <li> 고객 센터 : 000-000-0000 </li><br>
                    <li> 위치 : 서울시 도봉구 깐따삐야 </li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- container -->
    <?php
    if(isset($_COOKIE["failCook"])){
        setcookie("failCook","",time()-60);
        echo"<script>
            alert('비밀번호가 틀립니다!');
        </script>";
        }
    ?>
</body>
</html>
<script>
    function check(){
        var Form = document.signIn;
        var id = Form.u_id.value;
        var pw = Form.u_pw.value;
        if( !id ){
            alert("ID를 입력해주세요!");
            Form.u_id.focus();
            return false;
        }
        else if( !pw ){
            alert("비밀번호를 입력해주세요!");
            Form.u_pw.focus();
            return false;
        }
        else{
            Form.submit();
        }
        return false;
    }
</script>