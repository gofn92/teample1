<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> loginCheck.php  </title>
	</head>
	<body>
		<?php
        // $prevpage = $_SERVER['HTTP_REFERER'];
		$u_id = $_REQUEST["u_id"];
		$u_pw = $_REQUEST["u_pw"];
		$logchk = $_REQUEST["logchk"];
		
		$conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
		if(!$conn){
				die("접속이 되지 않았습니다.".mysqli_connect_error());
		}
		
		$str = "SELECT * FROM signUp WHERE u_id='$u_id'";
		$result = mysqli_query($conn,$str);	

		if(!$result){
			echo"등록되지않은아이디입니다.".mysqli_error($conn);
		}
		else{
			$list = mysqli_fetch_array($result);
			$db_pass = $list["u_pw1"];
		}
		mysqli_close($conn);

		if($u_pw != $db_pass){
			echo("<script>
				alert('비번이 틀립니다'.);
				document.write('$db_pass');
				document.write('$u_pw');
			</script>");
			exit;
		}
		else{
			echo("<script>
				alert('로그인에 성공했습니다!');
			</script");
		}
		?>
	</body>
</html>