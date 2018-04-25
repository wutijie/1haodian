<?php
	session_start();
	header("Content-type: text/html;charset=utf-8");
	if($_POST['code']==$_SESSION['code']){
		// 1. 连接数据库
		$link=mysqli_connect("localhost","root","root");
		// 2. 选择数据库
		mysqli_select_db($link,"web1");
		// 3. 设置字符集
		mysqli_set_charset($link,"utf8");
		// 4. 准备 sql 语句
		$username=$_POST['username'];
		echo "$username";
		if(empty($username)){
			echo "用户名不能为空";
			header("Refresh:0;url=../login.html");
			die();
		}
		$phone=$_POST['phone'];
		if(empty($phone)){
			echo "手机号不能为空";
			header("Refresh:0;url=../login.html");
			die();
		}
		$password=$_POST['password'];
		if(empty($password)){
			echo "密码不能为空";
			header("Refresh:0;url=../login.html");
			die();
		}
		$sql="insert into login(username,phone,password) values('$username','$phone','$password')";
		echo $sql;
		// 5. 发送 sql 语句
		$result=mysqli_query($link,$sql);
		if($result){
			echo "操作成功";
			header("Refresh:0;url=../register.html");
		}else{
			echo "操作失败";
			header("Refresh:0;url=../login.html");
		}
		// 6. 关闭数据库
		mysqli_close($link);
	}else{
		$username=$_POST['username'];
		if(empty($username)){
			echo "用户名不能为空";
			echo "<script>alert('用户名不能为空')</script>";
			header("Refresh:0;url=../login.html");
			die();
		}
		$phone=$_POST['phone'];
		if(empty($phone)){
			echo "手机号不能为空";
			echo "<script>alert('手机号不能为空')</script>";
			header("Refresh:0;url=../login.html");
			die();
		}
		$password=$_POST['password'];
		if(empty($password)){
			echo "密码不能为空";
			echo "<script>alert('密码不能为空')</script>";
			header("Refresh:0;url=../login.html");
			die();
		}
	}
?>