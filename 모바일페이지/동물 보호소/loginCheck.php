<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> loginCheck.php  </title>
	</head>
	<body>
	</body>
	<?php
        // $prevpage = $_SERVER['HTTP_REFERER'];
		$u_id = $_REQUEST["u_id"];
		$u_pw = $_REQUEST["u_pw"];

		$conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
		if(!$conn){
				die("접속이 되지 않았습니다.".mysqli_connect_error($conn));
		}

		$str = "SELECT * FROM signUp WHERE u_id='$u_id'";
		$result = mysqli_query($conn,$str);

		if(!$result){
			echo("등록되지않은아이디입니다.").mysqli_error($conn);
		}
		else{
			$list = mysqli_fetch_array($result);
			$db_pass = $list["u_pw1"];
		}
		mysqli_close($conn);

		if(mysqli_num_rows($result)==0){
			echo("<script>
					alert('아이디가 없습니다');
					document.location.href='signIn.php';
				</script>");
		}
		else{
			if($u_pw != $db_pass){
				echo("<script>
					alert('비번이 틀립니다');
					document.location.href='signIn.php';
				</script>");
				// exit;
			}
			else{
				setcookie("loginCook",$u_id,time()+3600);
				echo("<script>
					alert('로그인에 성공했습니다!');
					document.location.href='index.php';
				</script>");
			}
	}
	?>
</html>