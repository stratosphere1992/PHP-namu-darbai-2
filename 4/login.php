<?php 

$name = $_GET["name"];
$password = $_GET["password"];

if($name == "Admin" && $password == "123456")
{
    header('Location: profile.php');
}
else if($name != "Admin" && $password != "123456")
{
    header("Location: err.php?e=404");
} 

?>