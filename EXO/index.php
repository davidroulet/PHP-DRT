<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<h1>SI-CMI2a</h1>
<?php
$tab = array("Fabien", "David", "miguel", "Benoit", "Johnny", "Kevin", "chris", "dmiti", "etc..","bob");
for ($i = 0; $i != 9; $i++) {
    $e =$i;
    $e++;
    echo("
<li id='div$e' onclick=alert('$tab[$i]')>
$tab[$i]
</li>
    ");
}
?>
</body>
</html>