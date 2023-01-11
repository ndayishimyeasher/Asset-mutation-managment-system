
<?php
include_once 'connection.php';
?>
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
,
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

<div  class="well" style="overflow: auto; height:500px; margin-left: 15%; width:70%;">
  <form role="form" method="POST">
  <h2><strong>Injiza ubutaka</strong></h2><hr>
 <form role="form" method="POST"  enctype="multipart/form-data">

    <div class="form-group">
      <label for="lname">Nimero y'ubutaka</label>:<span style="color: red;"> *</span>
      <input type="text" name="placeno" id="lname" placeholder="Nimero y'ubutaka...." class="form-control">
    </div>

    <div class="form-group">
      <label for="fname">Amazina ya nyir'ubutaka </label>:<span style="color: red;"> *</span>
      <input type="text" name="owner" id="fname" placeholder="Amazina...." class="form-control">
    </div>

     
              <div class="form-group">
      <label for="id">Inomero y'indangamuntu</label>:<span style="color: red;"> *</span><br>
      <input type="number" name="idno" len="16" id="id" class="form-control" placeholder="Inomero y'indangamuntu">
     
    </div>

        <div class="form-group">
      <label for="phone">Inomero ya telephone </label>:<span style="color: red;"> *</span>
      <input type="number" name="phone" id="phone" placeholder="Inomero ya telephone...." class="form-control">
    </div>

<div class="form-group">
 <label for="district">Akarere </label>:<span style="color: red;"> *</span>
      <select name="district" class="form-control">
            <option value="">--Akarere--</option>
            <option value="Muhanga">Muhanga</option>
            <option value="Rubavu">Rubavu</option>
            <option value="Ruhango">Ruhango</option>
            <option value="Rutsiro">Rutsiro</option>
            <option value="Gasabo">Gasabo</option>   
            <option value="Nyarugenge">Nyarugenge</option>
            <option value="Kicukiro">Kicukiro</option>
            <option value="Kayonza">Kayonza</option>
            <option value="Nyagatare">Nyagatare</option>
            <option value="Burera">Burera</option> 
            <option value="Gakenke">Gakenke</option>
            <option value="Musanze">Musanze</option>
            <option value="Nyabihu">Nyabihu</option>
            <option value="Ngororero">Ngororero</option>
            <option value="Rulindo">Rulindo</option> 
            <option value="Gicumbi">Gicumbi</option>
            <option value="Kirehe">Kirehe</option>
            <option value="Rwamagana">Rwamagana</option>
            <option value="Bugesera">Bugesera</option>
            <option value="Gatsibo">Gatsibo</option> 
            <option value="Nyanza">Nyanza</option>
            <option value="Huye">Huye</option>
            <option value="Nyamagabe">Nyamagabe</option>
            <option value="Nyamasheke">Nyamasheke</option>
            <option value="Nyaruguru">Nyaruguru</option> 
            <option value="Karongi">Karongi</option>
            <option value="Kayonza">Kayonza</option>
            <option value="Kamonyi">Kamonyi</option>
            <option value="Rutsiro">Rutsiro</option>
            <option value="Gasabo">Gasabo</option>          
              </select>
</div> 

   <div class="form-group">
      <label for="sector">Umurenge</label>:<span style="color: red;"> *</span>
      <input type="text" name="sector" id="sector" class="form-control" placeholder="Umurenge.....">
    </div>

<div class="form-group">
      <label for="cell">Akagali </label>:<span style="color: red;"> *</span>
      <input type="text" name="cell" id="cell" class="form-control" placeholder="Akagali.....">
    </div>

<div class="form-group">
      <label for="village">Umudugudu </label>:<span style="color: red;"> *</span>
      <input type="text" name="village" id="village" class="form-control" placeholder="Umudugudu....">
    </div>

    
        <div class="form-group">
      <label for="id">Icyo hagenewe</label>:<span style="color: red;"> *</span><br>
      <input type="text" name="purpose" id="id" class="form-control" placeholder="Icyo ubutaka bwagenewe gukora..">
        </div>
        <div class="form-group">
      <label for="id">Umusoro</label>:<span style="color: red;"> *</span><br>
      <input type="text" name="tax" id="id" class="form-control" placeholder="Umusoro..">
        </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info" name="send" class="form-control">Injiza</button>
  </div>
</form>
<?php
if (isset($_POST['send'])) {
  $code=$_POST['placeno'];
  $owner=$_POST['owner'];
  $id=$_POST['idno'];
  $phone=$_POST['phone'];
  $district=$_POST['district'];
  $sector=$_POST['sector'];
  $cell=$_POST['cell'];
  $village=$_POST['village'];
 $tax=$_POST['tax'];
 $purpose=$_POST['purpose'];

 if ($code!=""&&$owner!=""&&$phone!=""&&$id!=""&&$district!=""&&$sector!=""&&$cell!=""&&$village!=""&&$purpose!=""&&$tax!="") {

          $insert=$conn->query("INSERT into land values ('$code','$owner','$id','$phone','$district','$sector','$cell','$village','$tax','$purpose')");
  if ($insert) {
    echo "<script>window.location.replace('add.php')</script>";
  }
  else{
    echo "<div class='alert alert-danger' style='margin-left:2%; margin-right:2%;'>Hari ikibazo mu byinjizwa</div>";
  }
}
else{
  echo "<div class='alert alert-danger' style='margin-left:2%; margin-right:2%;'>Uzuza ahabugenewe hose!!!</div>";
}
}







?>
</div>

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