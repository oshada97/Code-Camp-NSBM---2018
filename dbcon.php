<?php   

$server="localhost";
$uname="root";
$pw="";
$dbname="code_camp";

$con= mysqli_connect($server,$uname,$pw,$dbname);

if(!$con)
{
    die("Connection error ".mysqli_connect_error());
}
?>