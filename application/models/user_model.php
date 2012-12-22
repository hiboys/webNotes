<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->con = mysql_connect("localhost","root","123456");
		if (!$this->con)
		{
			die('Could not connect: ' . mysql_error());
		}
		else{
			mysql_select_db("project_db", $this->con);
		}
	}
	function __destruct()
	{
		mysql_close($this->con);
	}
	function insert_entry()
	{
		$user_name   = $_POST['name']; 
		$user_pwd = $_POST['password'];
		$sql="INSERT INTO users (name,password) VALUES ('$_POST[name]','$_POST[password]')";
		if (!mysql_query($sql,$this->con))
		{
			die('Error: ' . mysql_error());
		}
		echo "1 record added";
	}

	function create_db()
	{
		if (mysql_query("CREATE DATABASE project_db",$this->con))
		{
			echo "Database created\n";
		}
		else
		{
			echo "Error creating database: " . mysql_error();
		}
		mysql_select_db("project_db", $this->con);
		$sql = "CREATE TABLE users 
			(
				name varchar(15),
			password varchar(15)
		)";
		if(mysql_query($sql,$this->con))
		{
			echo "created table users ok!\n";
		}
	}

	function drop_db()
	{
		if (mysql_query("DROP DATABASE project_db",$this->con))
		{
			echo "Database drop\n";
		}
		else
		{
			echo "Error drop database: " . mysql_error();
		}
	}

	function log_in()
	{
		$user_name   = $_POST['name']; 
		$user_pwd = $_POST['password'];
		$sql = "select * from users where name='$user_name' and password='$user_pwd'";
		$result = mysql_query($sql,$this->con);
		$row_num = mysql_num_rows($result);
		if($row_num == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function sign_up()
	{
		$user_name   = $_POST['name']; 
		$user_pwd = $_POST['password'];
		$sql="INSERT INTO users (name, password)
		VALUES
		('$user_name','$user_pwd')";
		if (!mysql_query($sql,$this->con))
		{
			die('Error: ' . mysql_error());
		}
		echo "1 record added";
	}
}
?>
