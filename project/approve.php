<?php
session_start();

include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<!-- //Remain: correct place number    -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>Approval</title>
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
$sel=$conn->query("SELECT * from seller");
  ?>
  <table border="1" class="table-condensed table-striped table-hover" style="width: 100%">
    <tr>
    <th><b>Land UPI number</th>
    
    <th>Seller name</th>
    
    <th>Seller Id number</th>
    
    <th>Buyer name</th>
    
    <th>Buyer Id number</th>
    
    <th>Buyer phone number</th>
    
    <th>Asset location</th>

    <th>Decision</th>
    

  </tr>
  

    <tr><?php
while ($get=mysqli_fetch_array($sel)) {
  $buyer=$get['buyerid'];
  $seller=$get['ownerid'];
  $place=$get['placenumber'];
  $doubleselect=$conn->query("SELECT * from buyer where buyerid=$buyer and placenumber='$place' ");
  while($read=mysqli_fetch_array($doubleselect)){
    $unique=$read['recoverid'];
    ?>
    <td>          
<?php echo $read['placenumber'];
$place=$read['placenumber'];
 ?>
       
     </td>
         <td>
<?php echo $read['seller'];
$ownern=$read['buyer'];
 ?>
       
     </td>
    <td>
<?php echo $read['sellerid']; 
$owneri=$read['buyerid'];
       ?>
     </td>

              <td>
<?php echo $read['buyer']; ?>
       
     </td>
    <td>
<?php echo $read['sellerid']; ?>
       
     </td>
         <td>
<?php echo $get['ownerphone']; ?>
       
     </td>
              <td>
<?php echo $read['assetlocation']; ?>
       
     </td>
    <td>
      <form method="POST">
<button class="btn btn-info" name="accept">Accept</button><button class="btn btn-danger" name="reject"><a href="#?unique=<?php echo $unique; ?>" data-toggle="modal" data-target="#reject" style="text-decoration: none; color: white;">Reject</a></button>
<div id="reject" class="modal fade" role="dialog">
  <div class="modal-dialog">
   <div  class="well" style=" height:380px; margin-left: 23%;"> 
    <div class="modal-header">
    
      <a class="close" data-dismiss="modal">&times;</a><h4><strong>Reason to reject</strong></h4>
    </div>
<div class="modal-body">

<?php
if (isset($_POST['submit'])) {
  $reason=$_POST['reason'];
$sel=$conn->query("INSERT into cases values('$unique','$reason')");
if ($sel) {
  echo header('location:approve.php');
}
else{
  echo "Ongera ugerageze";
}
}
}

?>



  <center>
<form method="POST">
  <div class="form-group">
    <textarea class="form-control" placeholder="Text here the reason to reject....." name="reason" cols="10"></textarea>
  </div>
  <div class="form-group">
      <button class="btn btn-success" name="submit">Submit</button>
        </div>

</form>
  <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>  

<?php
if (isset($_POST['accept'])) {
 $update=$conn->query("UPDATE land set owner='$ownern',idno='$owneri' where placeid='$place' ");
 if ($update) {
         echo "Guhindura icyangomwa byakozwe murakoze";

 }
 else{
  echo "Byanze";
 }
}
?>
</form>
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