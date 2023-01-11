  <?php
  include_once 'connection.php';
  $myid=$_GET['uid'];
  $up=$conn->query("DELETE from managers where ud='$myid' ");
  if ($up) {
   echo header('location:adm.php');
  }
  else{
    echo "Failed to delete this user";
  }
?>