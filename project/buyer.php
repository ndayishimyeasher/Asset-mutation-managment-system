
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
  <ul class="nav navbar-nav">
  <li><a href="seller.php">Seller</a></li>
  <li><a href="buyer.php">Buyer</a></li>
  <li><a href="home.php">Check case</a></li>
     <li class="logout"><a href="logout.php" style=" border-bottom: 2px solid darkred; margin-left: 6%;">Logout</a></li>
  </ul>
  </div>

    </div>
  </div>
</nav>




<div  class="well" style="min-height:500px; margin-left: 15%; width:70%; background: white;">
  <form role="form" method="POST">
  <h2><strong>Fill the following information for buyer</strong></h2><hr>
 <form role="form" method="POST"  enctype="multipart/form-data">

    <div class="form-group">
      <label for="">UPI number</label>:<span style="color: red;"> *</span>
      <input type="text" name="placeno" placeholder="UPI number...." class="form-control">
    </div>

    <div class="form-group">
      <label for="fname">Buyer name</label>:<span style="color: red;"> *</span>
      <input type="text" name="owner" id="fname" placeholder="Buyer name...." class="form-control">
    </div>

     
              <div class="form-group">
      <label for="id">National ID number</label>:<span style="color: red;"> *</span><br>
      <input type="number" name="idno" len="16" id="id" class="form-control" placeholder=" Buyer ID number...........">
     
    </div>

        <div class="form-group">
      <label for="phone">Phone number </label>:<span style="color: red;"> *</span>
      <input type="number" name="phone" id="phone" placeholder="Buyer Phone number...." class="form-control">
    </div>

<div class="form-group">
 <label for="district">Where asset is </label>:<span style="color: red;"> *</span>
      <select name="district" class="form-control">
            <option value="">--Choose district--</option>
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
      <label for="sector">Seller name</label>:<span style="color: red;"> *</span>
      <input type="text" name="buyer" id="sector" class="form-control" placeholder="Seller name.....">
    </div>
   <div class="form-group">
      <label for="sector">Seller Id number</label>:<span style="color: red;"> *</span>
      <input type="text" name="bid" id="sid" class="form-control" placeholder="Seller ID number.....">
    </div>

<div class="alert alert-info col-md-12">
  Please check the national id, and document that confirms that land is sold and then attach together and stamp them.
</div>
                <div class="form-group">
      <span style="color: red;">Have already check, attach required document?</label>: *</span><br>
      <input type="radio" name="loan" value="Yes" style="margin-left:5rem;">Yes
        </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info" name="send" class="form-control">Register</button>
  </div>
  <?php
  include_once 'connection.php';
if (isset($_POST['send'])) {
  $upi=$_POST['placeno'];
  $bn=$_POST['owner'];
  $bid=$_POST['idno'];
  $bp=$_POST['phone'];
  $location=$_POST['district'];
  $sn=$_POST['buyer'];
  $sid=$_POST['bid'];
  $recover=uniqid();
  if ($upi=!""&&$bn!=""&&$bid!=""&&$bp!=""&&$location!=""&&$sn!=""&&$sid!="") {

    $insert=$conn->query("INSERT into buyer values('','$upi','$bn','$bp','$bid','$location','$sn',
      '$sid','$recover')");
    if ($insert) {
      echo '<div class="alert alert-success">Kode yanyu ni<b><i><u> '.$recover.'</u></i></b></div>';

    }
    else{
            echo '<div class="alert alert-danger">Ibyo winjije ntabwo bihura na sisitemu</div>';

     }
    
}
  else{
    echo '<div class="alert alert-danger">Uzuza ahantu habugenewe hose</div>';
  }
}
  ?>
</form>
</div>
</div>  

<div class="breadcrumb">

</div>
<nav class="navbar navbar-inverse" style="margin-bottom: 0%;margin-top: -1.4%; background: rgb(15, 35, 0);">
  <p style="text-align: center; padding-top: 4%;padding-bottom: 3%; color: white;">
    <i>Copyright &copy; <?php echo date("Y"); ?></i> <br>
    All right reserved to this page<br>
  </p>
</nav>
</div>
</div>
<script src="js/jquery-2.1.4.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>