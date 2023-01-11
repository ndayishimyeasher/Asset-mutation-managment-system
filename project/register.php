 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>Land officer branch</title>
<body>
<div class="container" style="background: whitesmoke;">
  <div class="m" style="border :1px solid gray; border-radius: 0.54%;">
<nav class="navbar navbar-inverse" style="padding-top: 4%;padding-bottom: 4%; background: rgb(15, 35, 0);">
  <div class="container-fluid">
    <div class="navbar-header">
          <h1 style="float:right; margin-right:30px; color: lightgray;">Asset mutation management system</h1>
      <button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="nav">
  <div class="dropdown">
  <ul class="nav nabar-nav navbar-right">
    <li class=" col-md-12  col-sm-12 col-xs-4logout"><a href="logout.php" style=" border-bottom: 2px solid darkred; background: white; float: right;">Logout</a></li>
  </ul>
  </div>

    </div>
  </div>
</nav>
 <div class="well" style="max-height: 500px; overflow: auto; width: 50%; margin-left: 25%; margin-top:50px;margin-bottom:50px;">

<?php
include_once 'connection.php';

if (isset($_POST['signin'])) {
  $email=$_POST['email'];
  $pass=sha1($_POST['password']);
  $role=$_POST['role'];
if ($email!=""&&$pass!="") {
  
$sel=$conn->query("INSERT into managers values('','$email','$pass','$role,'No')");
if ($sel) {
  echo header('location:index.php');
}
else{
  echo "Onger ugerageze";
}
}
else{
  echo '<div class="text-danger alert alert-danger"><span style="background:darkred; height:2rem; width:2rem; border-radius:360px; color:white;">&times;</span> Uzuza ahabugenewe hose</div>';
}
}

?>



  <center>
<form method="POST">
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Imeyiri........">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Ijambobanga......">
  </div>
    <div class="form-group">
    <select name="role" class="form-control">
      <option>---Role---</option>
      <option value="Admin">Admin</option>
      <option value="Approval">Approval</option>
    </select>
  </div>
  <div class="form-group">
      <button class="btn btn-success" name="signin">Saba uburenganzira</button>
        </div>

</form>
</center>
</div>
<div class="breadcrumb">

</div>
<nav class="navbar navbar-inverse" style="margin-bottom: 0%;margin-top: -1.4%; background: rgb(15, 35, 0);">
  <p style="text-align: center; padding-top: 4%;padding-bottom: 3%; color: white;">
    <i>Copyright &copy; 2022</i> <br>
    All right reserved to this page<br>
  </p>
</nav>
</div>
</div>
<script src="js/jquery-2.1.4.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>