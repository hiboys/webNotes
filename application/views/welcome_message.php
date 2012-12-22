<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2313">
	<title>Welcome to CodeIgniter</title>
	<!--add by wuyix-->
	<script type="text/javascript" src="http://www.picoshot.com/pagepix.js"></script>
	<script type="text/javascript" src="<?= base_url("js/jquery-1.8.3.min.js") ?>" ></script>
	<script type="text/javascript" src="<?= base_url("js/test.js") ?>" ></script>
	<style type="text/css">
	<!--add by wuyix end-->

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div>
<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		echo "$username have login!";
	}
?>
</div>
<div>
<script type="text/javascript">stw_pagepix('http://www.google.com/', 'en');</script>
</div>
<div>
<!--add by wuyix begin handle post-->
<form action="<?= base_url('welcome/handle_post') ?>" method="post" >
<label>ÓÃ»§Ãû:<input type="text" name="name"/></label>
<label>ÃÜÂë:<input type="text" name="password"/></label>
<button id="login">µÇÂ½</button>
</form>
<a href="<?= base_url('welcome/signup') ?>">×¢²á</button>
<a href="http://www.baidu.com">×¢Ïú</button>
<!--add by wuyix end-->
</div>
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<!--add by wuyix begin-->
	<div >
	<img src=<?= base_url('images/test.jpg') ?> id="picture" ></img>
	</div>
	<a href=<?= base_url('welcome/show') ?> >show the num</a>
	<!--add by wuyix end-->

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>
