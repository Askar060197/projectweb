
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Sale</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="check1.css"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="jav/style.css">
        <link rel="stylesheet" type="text/css" href="jav/jcarousel.basic.css">

        <script type="text/javascript" src="jav/jquery.js"></script>
        <script type="text/javascript" src="jav/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="jav/jcarousel.basic.js"></script>
        <script type="text/javascript" src="jav/query.js"></script>
</head>
<body>
<a href="#myTab" style="position: fixed;"><icon class="glyphicon glyphicon-menu-up"></icon></a>
<a href="#bottom" style="position: fixed;margin-top: 12px;"><icon class="glyphicon glyphicon-menu-down"></icon></a>
<?php

$host="localhost"; 
$user="root"; 
$password=""; 
$db_name="mysql";  
$tbl_name="regphp"; 

mysql_connect("$host", "$user", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
session_start();
  $num = 0;
  if (isset($_SESSION["name"])) {
  $num = 1;
  echo "<p class=\"python\">".$_SESSION["name"]."</p>";
  }
  if (isset($_POST['Login'])) {

  if (!empty($_POST['login']) && !empty($_POST['password'])){
    $username = $_POST['login'];
    $password = $_POST['password'];

      $query =mysql_query("SELECT * FROM regphp WHERE login='".$username."' AND password='".$password."'");

      $numrows=mysql_num_rows($query);

      if($numrows!=0)
      {
        while($row=mysql_fetch_assoc($query))
      {
      $dbusername=$row['login'];
      $dbpassword=$row['password'];
      $_SESSION['name']=$row['name'];
      }

      if($username == $dbusername && $password == $dbpassword) {
        $message = "Welcome to world music!";
      }
    }
      else {

      $message =  "Wrong login or password";
      }

      }
      else {
      $message = "All line must putten";
    }
  }
  ?>
<ul class="nav nav-tabs" id="myTab">
  <li><a href="index.php">Home</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="songs.php">Songs</a></li>
  <li class="active"><a href="videos.php">Videos</a></li>
  <li><a href="books.php" >audioBooks</a></li>
<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
</div>
</li>
  <li><a href="message.php" style="text-align: center"><icon class="glyphicon glyphicon-envelope" style="width: 50px;"></icon></a></li>
  <li style="float: right;"><a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="sign">Sign in</a></li>
  <li style="float: right;"><a role="button" data-toggle="collapse" href="#collapseExampl" aria-expanded="false" aria-controls="collapseExampl">Registration</a></li>
  <li style="float: right;"><a href="Logout.php">Logout</a></li>
</ul>

 <div class="collapse" id="collapseExample">
  <div class="well">
    <center>
    <form class="form-horizontal" role="form" action="index.php" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="Login" value="login" <?php if ($num == 1) echo 'disabled="disabled"' ?> />
    </div>
  </div>
</form>
    </center>

  </div>
</div>
<?php if (!empty($message)) {echo "<p class=\"error\">".$message . "</p>";} ?>
<div class="collapse" id="collapseExampl">
  <div class="well">
<?php 
$con=mysqli_connect("localhost","root","","mysql"); 
mysqli_select_db($con,"regphp"); 
if(isset($_POST['Log'])){ 
$name=$_POST['name'];  
$login=$_POST['login']; 
$password=$_POST['password'];    
$query=$con->query("INSERT INTO `regphp` (`id`,`name`,`login`,`password`) VALUES(null,'$name', '$login','$password')");
} 
?>
    <center>
    <form class="form-horizontal" role="form" action="index.php" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword3" placeholder="email" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputEmail3" placeholder="password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="Log" value="Register" <?php if ($num == 1) echo 'disabled="disabled"' ?> />
    </div>
  </div>
</form>
    </center>
  </div>
</div>
    
      
      <ol class="breadcrumb">
  <li class="active"><a href="#">Zar</a></li>
  <li><a href="#">Kazakh</a></li>
  <li>Russian</li>
 </ol>
 <h1 class="title">Videos</h1>
 <div class="main">
       <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      <figure class="file">
        <video controls class="vidsize"><source src="1.mp4"></source></video>
      </figure>
      </div>
       
     <div class="button" id="bottom">
       <ul style="display: block;">
        <li>Tel: 8 708 945 92 36</li>
        <li>WhatsUp: 8 771 895 55 97</li>
      </ul>
    </div>
  </body>
</html>