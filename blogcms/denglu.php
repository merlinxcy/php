<?php
	echo 1;
	$servername="localhost";
	$username="xeldax@localhost";
	$password="";
	$mysql_handle=new mysqli($servername,$username,$password);
	if($mysql_handle->connect_error)
	{
		die("server error");
	}
	else
	{
		echo "connect success1<br>";
		//sleep(5);
	}




	//confirm database existed or not
	$database_flag=0;
	$mysql_result=$mysql_handle->query("select * from information_schema.schemata where schema_name='blog'");
	//var_dump($mysql_result->fetch_assoc());
	if($mysql_result->fetch_assoc()==NULL)
	{
		echo '<b>[-]No database "BLOG"</b><br>';
		echo '<b>[*]Create database</b><br>';
		$database_flag=1;
	}
	else
	{
		$mysql_handle->close();
		$mysql_handle=new mysqli($servername,$username,$password,"blog");
	}
	$db_create_sql='create database blog';
	if($database_flag===1)
	{
		if($mysql_handle->query($db_create_sql)==TRUE)
		{
			echo "create database success";
			$mysql_handle->close();
			$mysql_handle=new mysqli($servername,$username,$password,"blog");
			echo "change database success";
		}
		else
		{
			echo "Error create database:".$mysql_handle->error;
		}
	}


	//confirm login table eixisted or not
	$login_table_flag=0;
	$mysql_result=$mysql_handle->query("select * from information_schema.tables where table_schema='blog' and table_name='LoginInfo'");
	if($mysql_result->fetch_assoc()==NULL)
	{
		echo '<b>[-]No table "loginInfo"</b><br>';
		echo '<b>[*]Create table LoginInfo</b><br>';
		$login_table_flag=1;
	}
	if($login_table_flag===1)
	{
		if($mysql_handle->query("create table LoginInfo(Username varchar(100) primary key,Password varchar(100) not null,Role varchar(100) not null, Status int not null,Createtime varchar(100) not null, Hostflag int,Host varchar(100),LastLoginIP varchar(100),LastLoginTime varchar(100))"))
		{
			echo "create table login success";
		}
		else
		{
			echo "Error create database:".$mysql_handle->error;
		}

	}

	//confirm content table existed or not
	//confirm picture_url table existed or not
	//confirm picture_source table existed or not
	//login module
	/*
	$login_username=$_POST['username'];
	$login_password=$_POST['password'];
	$check_token=$_POST['token'];
	*/
	$login_username=$_GET['username'];
	$login_password=$_GET['password'];
	$check_token=$_GET['token'];


	//encrypt
	function encrypt_func($param)
	{
		return md5(base64_encode(str_rot13(strrev($param))));
	}


	function login_func($username,$password,$token)
	{

	}

	function register_func($username,$passowrd)
	{

	}


	// -- test function
	/*
	echo $_GET['q'];
	echo '<br>';
	echo encrypt_func($_GET['q']);
	*/
	$db_check_sql='select schema_name from information_schema.schemata where schema_name="mysql"';
	$result=$mysql_handle->query($db_check_sql);
	echo $result->num_rows;
	echo 1;
	$mysql_handle->close();
?>
