<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<!-- 데이터베이스이름과 테이블이름을 정해서 마무리할것 -->
<!-- 메인페이지로 돌아가는 주소도 정해줄것 -->
    <?php
        $u_id = $_REQUEST["u_id"];
        $u_pw1  = $_REQUEST["u_pw1"];
        $birth  = $_REQUEST["birth"];
        $tel  = $_REQUEST["tel"];
        $gender  = $_REQUEST["gender"];
        $mail  = $_REQUEST["email"];
        $u_name  = $_REQUEST["u_name"];

        $conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
        // 서버주소, db관리자 주소, 관리자비밀번호, 데이터베이스이름

        if(!$conn){
            die("접속이 되지 않았습니다.".mysqli_connect_error());
        }
        $str = "INSERT INTO signUp VALUES ('$u_id','$u_pw1',$birth,$tel,'$gender','$mail','$u_name');";
        //INTO 테이블이름
        $result = mysqli_query($conn,$str);


        if($result){   // 처리가 완료되고 main_ui.html 되돌아감.
            echo"<script>
                    alert('정상적으로 데이터가 처리 되었습니다');
                    location.href='signIn.html';
                </script>";
                // 여기에 돌아갈주소 정해야함
                //쿠키사용 페이지주소저장 없을시 메인
        }
        else{
            echo"작업을 수행하는데 문제가 발생하였습니다.".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>