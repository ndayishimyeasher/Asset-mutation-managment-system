<?php
include_once 'connection.php';
include_once 'gethint.php';
session_start();

?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
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
<div class="well">
<p><b>Start typing case number in the input field below:</b></p>
<form>
<input type="text" onkeyup="showHint(this.value)" class="form-control" placeholder="Type the case number......">
</form>
<p>Suggestions: <a href="#demo" data-toggle="collapse"><span id="txtHint"></span></a></p>
<div id="demo" class="collapse">
<?php echo $da; ?>
</div>

</div>
<nav class="navbar navbar-inverse" style="margin-bottom: 0%;margin-top: -1.4%; background: rgb(15, 35, 0);">
  <p style="text-align: center; padding-top: 4%;padding-bottom: 3%; color: white;">
    <i>Copyright &copy; <?php echo date("Y"); ?></i> <br>
    All right reserved to this page<br>
  </p>
</nav>
</div>
<script src="js/jquery-2.1.4.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>

</body>
</html>