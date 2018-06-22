<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统的后台执行过程</title> 
</head> 
<body> 
  <?php 
    session_start();//登录系统开启一个session内容 
    $_SESSION["username"]=null;
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
  
    $con=mysql_connect("localhost","root","1234"); 
    if (!$con) { 
      die('数据库连接失败'.$mysql_error()); 
    } 
    mysql_select_db("user_info",$con);
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysql_query("select * from user_info where username ='{$username}' ");
    while ($row=mysql_fetch_array($result)) {//while循环将$result中的结果找出来 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    if (is_null($dbusername)) {//用户名在数据库中不存在时跳回index.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("用户名不存在"); 
    window.location.href="login.html"; 
  </script> 
  <?php 
    } 
    else { 
      if ($dbpassword!=$password){//当对应密码不对时跳回index.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="login.html"; 
  </script> 
  <?php 
      } 

      else { 
          session_start();
         $_SESSION["username"]=$username; 
  ?> 
  <script type="text/javascript"> 
      
    window.location.href="tmall.php"; 
  </script> 
  <?php 
      } 
    } 
  mysql_close($con);//关闭数据库连接，如不关闭，下次连接时会出错 
  ?> 
</body> 
</html>