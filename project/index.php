
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>Land officer branch</title>
<body>
<div class="container" style="background: url(pic.jpg)">
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

  </div>

    </div>
  </div>
</nav>


  <div class="well" style="max-height: 500px; overflow: auto; width: 50%; margin-left: 25%; margin-top:50px;margin-bottom:50px; background: transparent;">


  <center>
<form method="POST">
  <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Imeyiri........">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Ijambobanga......">
  </div>
  <div class="form-group">
      <button class="btn btn-success" name="signin">Injira</button>
        </div>

  <div class="alert alert-info">Niba udafite Konti <a href="#"  data-toggle="modal" data-target="#signup">Kanda hano</a></div>

</form>
</center>
</div>
<?php
session_start();
include_once 'connection.php';
if (isset($_POST['signin'])){
  $email=$_POST['email'];
  $password=md5($_POST['password']);

  $select=$conn ->query("SELECT  * from managers where email='$email'and password='$password'");

while ($row=mysqli_fetch_assoc($select)) {
  $id_row=$row['id'];
  $tit=$row['role'];
  $email=$row['email'];
  $pass=$row['password'];
  $allowed=$row['deci'];
}
if ($email==$email && $password==$pass) {
  $_SESSION['id'] = $id_row;
  
  if ($allowed=="Yes") {
  if ($tit=="Admin") {
    $_SESSION['id'] = $id_row;
    $_SESSION['allowed'] ="Admin";
    echo header('location:adm.php');
  }
  elseif ($tit=="Approval") {
    $_SESSION['id'] = $id_row;
    $_SESSION['allowed'] ="Approval";
    echo header('location:approve.php');
  }
  elseif ($tit=="Branch manager") {
    $_SESSION['id'] = $id_row;
    $_SESSION['allowed'] ="Branch";
      echo header('location:home.php');
  }

  else {
    echo "Processing.......!";
  }
  }
  else{
      echo "<script>alert('Wait to be confirmed by authorised!')</script>";

    }
  }
else{
  echo "<script>alert('Email or password not matching. Please try again!')</script>";
}

}
?></form>
</div>
<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <div  class="well" style=" height:510px; margin-left: 23%;"> 
    <div class="modal-header">
    
      <a href="#" class="close" data-dismiss="modal">&times;</a><h4><strong>Fill all credentials to register</strong></h4>
    </div>
<div class="modal-body">

<?php

if (isset($_POST['signup'])) {
  $email=$_POST['email'];
  $pass=md5($_POST['password']);
  $role=$_POST['role'];
if ($email!=""&&$pass!="") {
  
$sel=$conn->query("INSERT into managers values('','$email','$pass','$role','No')");
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
      <option value="Branch manager">Branch manager</option>
    </select>
  </div>
  <div class="form-group">
      <button class="btn btn-success" name="signup">Saba uburenganzira</button>
        </div>

</form>
  <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>  


  </div>
</div>
<div class="breadcrumb">

</div>
<nav class="navbar navbar-inverse" style="margin-bottom: 0%;margin-top: -1.4%; background: rgb(15, 35, 0);">
  <p style="text-align: center; padding-top: 4%;padding-bottom: 3%; color: white;">
    <i>Copyright &copy; <?php echo date("Y"); ?>  </i> <br>
    All right reserved to this page<br>
  </p>
</nav>
</div>
</div>
<script src="js/jquery-2.1.4.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>
