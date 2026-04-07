<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$tab = [1, 2, 3, 4, 5, 6];
foreach ($tab as $valeur) {
 if ($valeur % 2 == 0) {
 echo $valeur . "<br>";
 }
}
?> 
</body>
</html>