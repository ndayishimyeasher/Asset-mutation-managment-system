  <?php
  include_once 'connection.php';
  $myid=$_GET['uid'];
  $up=$conn->query("UPDATE managers set deci='Yes' where ud='$myid' ");
  if ($up) {
   echo header('location:adm.php');
  }
  else{
    echo "Failed to confirm this user";
  }
?>