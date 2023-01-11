<?php
include_once 'connection.php';
$sele=$conn->query("SELECT * from cases ");
while ($take=mysqli_fetch_array($sele)) {
    $data=$take['caseid'];
    $da=$take['reason'];

$a[]=$data;
@$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint ==="" ? "no suggestion" : $hint;
}
?>