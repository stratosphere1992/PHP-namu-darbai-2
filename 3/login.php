<?php 

$name = $_GET["name"];
$password = $_GET["password"];

if($name == "Admin" && $password == "123456")
{
    $rezultatas = "Login was successful";
}
else if($name != "Admin" && $password != "123456")
{
    $rezultatas = "Wrong username or password!";
} 


echo "<h1>$rezultatas</h1>";

?>