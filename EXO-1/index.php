<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$value =20;
$step = 3;
$i=0;
for($i="e";$i<10;$i++){
    if($value>=30){
        echo("le Nombre vaut ".$value."<br>");
    }
    else{
        echo ("nombre trop petit"."<br>");
    }
 $value+=$step;
}

?>
</body>
</html>
