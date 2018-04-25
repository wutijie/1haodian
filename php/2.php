<?php
    session_start();
    //链接数据库
	$link=mysqli_connect("localhost","root","");
	//选择数据库
	mysqli_select_db($link,"web1");
	//设置字符集
	mysqli_set_charset($link,"utf8");
	//准备sql
	$username=$_POST['username'];
	echo $username;
	$password=$_POST['password'];
	echo $password;
	$sql="select * from login where username='$username'";
	echo "<br>";
	echo $sql;
	//执行发送
	$a=mysqli_query($link,$sql);
    $result=mysqli_fetch_assoc($a);
    var_dump($result);
    if($result){
    	if($password==$result['password']){
    	    $_SESSION['username']=$username;
    	    header("location:../index.php");
    	}else{
    		header("location:../register.html");
    	}
    }else{
		header("location:../register.html");
	}
	//关闭数据库、
	mysqli_close($link);