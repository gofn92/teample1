<!-- 테스트하기편하려고 테이블만드는겁니가
	데이터베이스알아서만들고 관리자아이디비번정도는 바꿉시다
-->
<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> create_database.php </title>
	</head>
	<body>
		<p>create_database</p>
		<?php
			$conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
			// mysqli_connect("서버이름","사용자아이디","사용자비밀번호");
			if($conn){
				echo "접속이 원활하게 잘 이루어졌습니다.";
			}
			else {
				die ("접속이 되지 않았습니다.!".mysqli_connect_error());
			}
			
            $str = "CREATE TABLE signUp(
                u_id char(12),
                u_pw1 char(12),
                birth int(6),
                tel int(11),
                gender char(4),
                mail char(30),
                u_name char(4),
                primary key(u_id)
                )";
        
        $result1 = mysqli_query($conn,$str);
        if( $result1 ){
            echo" 테이블이 정상적으로 생성되었습니다.";
        }
        else {
            echo " 테이블이 정상적으로 생성 되지 못했습니다.".mysqli_error($conn);
        }

			mysqli_close($conn);
		?>
	</body>
</html>