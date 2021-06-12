<!--For Development Purpose-->

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "bank";

$conn=mysqli_connect($server,$username,$password,$db);
if($conn){

}

else
die("connection to this database failed due to " .mysqli_connect_error());

?>