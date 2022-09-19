<?php 

$color = $_POST["color"];

if($color == "melyna")
{
    echo '<body style="background-color:blue">';
}
if($color == "juoda")
{
    echo '<body style="background-color:black">';
}
else if($color == "raudona")
{
    echo '<body style="background-color:red">';
}

?>