<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tag_model extends CI_Model {
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

	function tags()
	{
		$sql = "SELECT * from tags WHERE tagname = '²Æ¾­'";
		$result = mysql_query($sql,$this->con);
		print_r(mysql_fetch_array($result));
	}
}
?>

