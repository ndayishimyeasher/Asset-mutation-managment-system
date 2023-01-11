
<!DOCTYPE html>
<html>
<!-- //Remain:confirm user       correct place number       homepage for approval -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>Admin</title>
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




<div  class="well " style="overflow: auto; height:500px; width:95%; margin-left: 2.5%; background: white;">
  <?php 
include_once 'connection.php';
$sel=$conn->query("SELECT * from managers");
  ?>
  <table border="1" class="table-condensed table-striped table-hover" style="width: 100%">
    <tr>
    <th><b>Number</th>
    
    <th>Email</th>
    
    <th>Role</th>
    
    <th>Decision</th>
    
  </tr>
  

    <tr><?php
    $counter=1;
while ($get=mysqli_fetch_array($sel)) {
  $buyer=$get['email'];
  $seller=$get['role'];
    ?>
    <td><?php echo $counter++; ?></td>
    <td>       
       <?php echo $buyer; ?>
     </td>
         <td>
          <?php
          echo $seller;

 ?>
       
     </td>
    <td>
<a href="realconf.php?uid=<?php echo $get['ud']; ?>"><button class="btn btn-info" name="accept">Confirm</button></a><a href="deleteuser.php?uid=<?php echo $get['ud']; ?>"><button class="btn btn-danger" name="reject">Reject</button></a>
     </td>
       </tr>
<?php } ?>

</table>
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