<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Color</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="text" name="color" placeholder="color">
        <button type="submit" name="change">Change</button>
    </form>

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
</body>
</html>