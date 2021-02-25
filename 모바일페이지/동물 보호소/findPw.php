<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> findPw.php  </title>
	</head>
	<body>
	</body>
	<?php
        // $prevpage = $_SERVER['HTTP_REFERER'];
		$u_name = $_REQUEST["u_name"];
		$u_id = $_REQUEST["u_id"];
		$tel = $_REQUEST["tel"];

		$conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
		if(!$conn){
				die("접속이 되지 않았습니다.".mysqli_connect_error());
		}

		$str = "SELECT * FROM signUp WHERE u_name='$u_name'";
		$result = mysqli_query($conn,$str);

		if(mysqli_num_rows($result)==0){
			echo("<script>
					alert('가입된 정보가 없습니다');
					document.location.href='findSign.php';
				</script>");
		}
		else{
            $str = "SELECT * FROM signUp WHERE tel='$tel'";
            $result = mysqli_query($conn,$str);

            if(mysqli_num_rows($result)==0){
                echo("<script>
                        alert('가입된 정보가 없습니다');
                        document.location.href='findSign.php';
                    </script>");
		    }
            else{
                $list = mysqli_fetch_array($result);
                $db_id = $list["u_id"];
                $db_pass = $list["u_pw1"];
            }
		}
		mysqli_close($conn);

		if($db_id == $u_id){
            echo("<script>
				alert('비밀번호는 $db_pass 입니다.');
				document.location.href='index.php';
			</script>");
			// exit;
		}
		else{
			// setcookie("loginCook",$u_id,time()+3600);
			echo("<script>
				alert('가입된 정보가 없습니다');
				document.location.href='signIn.html';
			</script>");
		}
	?>
</html>