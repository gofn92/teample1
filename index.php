<?php
	if(isset($_COOKIE["loginCook"])){
        // 쿠키가 있는지 확인
		$loginCook = $_COOKIE["loginCook"];
        //  쿠키값 받기

	}
	else {
		$loginCook ="";
        // 없으면 변수초기화
	}
?>
<!--
    로그인 페이지 파일
    signIn.php
    회원가입 페이지파일
    signUp.php
    로그아웃 페이지 파일
    logout.php
    링크걸고 자리잡아줄것
    로그인을 로그아웃으로 바꾸는 부분은 아래쪽에!!!!!!!!!
-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <script src="js/jquery.js"></script>
    <title>mian-idx</title>
    <style>
        @media (max-width:1920px) {
            @font-face {
                font-family: 'SDSamliphopangche_Outline';
                src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts-20-12@1.0/SDSamliphopangche_Outline.woff') format('woff');
                font-weight: normal;
                font-style: normal;
            }
            @font-face {
                font-family: 'Cafe24Dongdong';
                src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.1/Cafe24Dongdong.woff') format('woff');
                font-weight: normal;
                font-style: normal;
            }
            h1,h2,h3,h4{
                font-family: 'SDSamliphopangche_Outline';
            }
            p,b,i,span{
                font-family: 'Cafe24Dongdong';
            }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                text-decoration: none;
            }
            html,body{
                width: 100%;
                display: flex;
                justify-content: center;
                background: palevioletred;
            }
            .con{
                width: 90%; height: 100%;
            }
            header{
                height: 120px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 8px 12px;
                background: rgba(255,255,255,0.5);
            }
            .logo img{
                width: 65px; height: 65px;
            }
            header ul{
                display: flex;
            }
            header ul li{
                padding: 8px 12px;
            }
            header ul li img{
                width: 100px; height: 50px;
            }
            header ul li button{
                transition: 0.5s;
            }
            header ul li button:hover{
                transform: scale(1.2);
            }
            section{
                /* height: 100vh; */
                background: white;
            }
            article{
                height: 100vh;
                background: white;
            }
            .content1{
                height: 50vh;
                display: flex;
                justify-content: center;
            }
            .content{
                width: 90%;
            }
            .content img{
                width: 100%; height: 300px;
            }
            .content2{
                line-height: 50px;
                text-align: center;

            }
            .content2 .crew{
                display: flex;
                justify-content: space-around;
                height: 50%;
            }
            .content2 .crew-img{
                width: 200px;
                /* height: 200px; */
            }
            .content2 .crew-img img{
                width: 200px; height: 200px;
            }
            .content2 .crew-txt{
                width: 100%;
                height: 50%;
                display: flex;
                justify-content: space-around;
            }
            .content2 .crew-txt .c-txt{
                width: 40%;
                color: black;
            }
            .content2 .crew-txt2{
                height: 30%;
            }
            .content2 .crew-img2{
                position: relative;
                height: 50%;
            }
            .content2 .crew-img2 img{
                width: 100%; height: 400px;
            }
            .content2 .crew-img2::before{
                content: '';
                position: absolute;
                top: 0; left: 0;
                width: 100%; height: 400px;
                background: rgba(255,255,255,0.5);
            }
            footer{
                background: white;
                border-top: 1px solid black;
            }
            .container{
                display: none;
            }
            .container1{
                display: block;
            }
            .menubtn{
                border : 0;
                background: inherit;
            }
            .menubtn:focus{
                outline: none;
            }
        }
    </style>
    <script>
        function changecon(n){
            $visible = ".container" + n;

            for( $i = 0; $i < $maxmenu; $i++){
                $reset = ".container"+($i+1);
                $($reset).css("display","none");
            }
            $($visible).css("display","block");
        }
        $(function(){
            $maxmenu = $(".menubtn").length;
        });
    </script>
</head>
<body>
    <div class="con">
        <header>
            <div class="logo">
                <img src="image/logo_pink.png" alt="logo">
            </div>
            <ul>
                <li><button type="button" class="menubtn" onclick="changecon(1);"><img src="image/dlqdid.gif" alt=""></button></li>
                <li><button type="button" class="menubtn" onclick="changecon(2);"><img src="image/dlqdid.gif" alt=""></button></li>
                <li><button type="button" class="menubtn" onclick="changecon(3);"><img src="image/dlqdid.gif" alt=""></button></li>
                <li><button type="button" class="menubtn" onclick="changecon(4);"><img src="image/dlqdid.gif" alt=""></button></li>
                <li><button type="button" class="menubtn" onclick="changecon(5);"><img src="image/dlqdid.gif" alt=""></button></li>
            </ul>
            <div></div>
        </header>
        <div class="container container1">
            <section class="content1">
            <div class="content">
                <img src="image/doc2.jpg" alt="">
            </div>
            </section>
            <section class="content2">
                <h2>보호소 소개</h2>
                <h3>OUR CREW</h3>
                <div class="crew">
                    <div class="crew-img">
                        <img src="image/dog1.jpg" alt="">
                        <h4>EMILY</h4>
                    </div>
                    <div class="crew-img">
                        <img src="image/dog1.jpg" alt="">
                        <h4>TOM</h4>
                    </div>
                    <div class="crew-img">
                        <img src="image/dog1.jpg" alt="">
                        <h4>BRAND</h4>
                    </div>
                    <div class="crew-img">
                        <img src="image/dog1.jpg" alt="">
                        <h4>JERRY</h4>
                    </div>
                </div>
                <article class="crew-txt">
                    <div class="c-txt">
                        <h2>우리 아이는요 어쩌고</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, soluta sequi. Adipisci, excepturi nemo error libero eius placeat doloribus iste temporibus a dolore. Sit sunt voluptatibus impedit, quos rem pariatur!
                        </p>
                    </div>
                    <div class="c-txt">
                        <h2>저희 아이는요 저쩌고</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, in exercitationem aliquid accusantium culpa laboriosam esse totam maiores quis aspernatur ratione rem natus, facilis ipsum. Ut debitis sint amet ad.
                        </p>
                    </div>
                </article>
                <article class="crew-txt2">
                    <div class="c-txt2">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet ipsum corrupti aliquam possimus quisquam? Harum quis quidem, molestias nostrum, ad velit sint, ex expedita ut quod natus? Necessitatibus, laudantium. Fugiat. <br>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur aspernatur beatae illum veritatis ad expedita natus asperiores, ut tempora ea porro reiciendis labore dignissimos quidem exercitationem dolores repellat distinctio corporis?
                        </p>
                    </div>
                </article>
                <article class="crew-img2">
                    <div class="c-img2">
                        <img src="image/dc.jpg" alt="" width="100%">
                    </div>
                </article>
            </section>
        </div>
        <div class="container container2">
            2번
        </div>
        <div class="container container3">
            3번
        </div>
        <div class="container container4">
            4번
        </div>
        <div class="container container5">
            <div>
                <span id="loginmenu"><a href="signIn.php">로그인</a></span>
            </div>
        </div>
        <footer>
            <p>
                회장 : 김 은 영
            </p>
            <p>
                문의전화 : 000-0000-0000
            </p>
            <p>
                운영시간 : 00시~00시
            </p>
            <p>
                주소 : 서울특별시 캘리포이나주 대구 부산역
            </p>
            <p>
                후원 : <strong>005702-04-091524</strong> 군미은행 "티어하임"
            </p>
        </footer>
    </div>

</body>

</html>
    <!-- 쿠키가 있으면 작동할 스크립트 부분-->
<?php
    if(isset($_COOKIE["loginCook"])){
        echo"<script>
            var logout = '<a href=logout.php>로그아웃</a>';
            $('#loginmenu').html(logout);
            </script>";
    }
?>