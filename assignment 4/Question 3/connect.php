<?php //TO make connection
$hostname = "localhost"; //or 127.0.0.1
$username = "root"; //by default
$password = ""; //by default
$databasename = "Web";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn)
{
    echo "Connection Successful...";
}
else
{
    echo "Connection failed..." + mysqli_connect_error();
}

?>

