<<<<<<< HEAD
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "cinelux";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql: ' . mysqli_connect_error());
}
=======
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
>>>>>>> ad940724cdf419c4c15e5ee851db482cf75fb51e
?>