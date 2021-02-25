<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> findId.php  </title>
	</head>
	<body>
	</body>
	<?php
        // $prevpage = $_SERVER['HTTP_REFERER'];
		$u_name = $_REQUEST["u_name"];
		$tel = $_REQUEST["tel"];

		$conn = mysqli_connect("localhost","dysdyd","ckddud!159","dysdyd");
		if(!$conn){
				die("접속이 되지 않았습니다.".mysqli_connect_error());
		}

		$str = "SELECT * FROM signUp WHERE u_name='$u_name'";
		$result = mysqli_query($conn,$str);

		if(mysqli_num_rows($result)==0){
			echo("<script>
					alert('가입된 이름이 없습니다');
					document.location.href='findSign.html';
				</script>");
		}
		else{
			$list = mysqli_fetch_array($result);
            $db_tel = $list["tel"];
			$db_id = $list["u_id"];
		}
		mysqli_close($conn);

		if($db_tel == $tel){
            echo("<script>
				alert('아이디는 $db_id 입니다.');
				document.location.href='signIn.php';
			</script>");
			// exit;
		}
		else{
			// setcookie("loginCook",$u_id,time()+3600);
			echo("<script>
				alert('가입된 정보가 없습니다');
				document.location.href='findSign.html';
			</script>");
		}
	?>
</html>