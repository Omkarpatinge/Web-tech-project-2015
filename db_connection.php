<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtrest";


$conn=mysql_connect($servername, $username, $password);
if (mysql_error() > "") print mysql_error() . "<br>";

mysql_select_db($dbname, $conn);
if (mysql_error() > "") print mysql_error() . "<br>";

?>
</body>
</html>



