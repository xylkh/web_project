<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>head</title>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="css\bootstrap.css" rel="stylesheet">
<script src="js\bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="css\head.css" rel="stylesheet">

</head>
<body>
<nav class="top">
<div class="top_middle">
		<a href="tmall.php" target="_parent">
		<span style="color: #C40000" class=" fa fa-home icon_style"></span>
			天猫首页
		</a>	
		<span>喵，欢迎来天猫</span>
			<?php
             error_reporting(0);
			if(!empty($_SESSION['username']))
				{

            echo "<a href='login.html' >请登录</a>" ;
			echo "<a href='register.html'>免费注册</a>";
				}
				else
				{

            session_start();
            echo $_SESSION['username']; 
            
}
		?>		
		<?php
             error_reporting(0);
			if(!empty($_SESSION['username']))
				{
          
            
          
				}
				else
				{

            echo "<a href='login.html'  >请登录</a>" ;
			echo "<a href='register.html'>免费注册</a>";
}
		?>		
			<span class="pull-right">
			<a href="">我的订单</a>
			<a href="">
			<span style="color: #C40000" class="fa fa-shopping-cart"></span>购物车<strong>0</strong>件</a>		
		</span>
	</div>
</nav>
</body>
</html>