<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>
</head>

<?php 

$skaicius1 = $_GET["skaicius1"];
$veiksmas = $_GET["veiksmas"];
$skaicius2 = $_GET["skaicius2"];

$rezultatas = 0;
if($veiksmas == "+")
{
    $rezultatas = $skaicius1 + $skaicius2;
}
else if($veiksmas == "-")
{
    $rezultatas = $skaicius1 - $skaicius2;
} 

echo "<h1>Rezultatas: $rezultatas</h1>";

?>

<body>
    <form method="get" action="index.php">
        <input type="text" name="skaicius1">
        <input type="text" name="veiksmas">
        <input type="text" name="skaicius2">
        <button type="submit" name="spausk">Skaiciuoti</button>
    </form>
</body>
</html>