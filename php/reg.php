<?php
	header("Content-type:text/html;charset=utf-8");
	// 1. 连接服务器
	$link=mysqli_connect("localhost","root","");
	// 2. 选择数据库
	mysqli_select_db($link,"web1");
	// 3. 设置字符集
	mysqli_set_charset($link,"utf8");
	// 4. 准备sql语句
	// 查看数据
	$sql="select * from login";
	// 5. 发送/执行 sql 语句
	$result=mysqli_query($link,$sql);
	$re=mysqli_fetch_assoc($result);
	// 6. 关闭数据库
	mysqli_close($link);
?>