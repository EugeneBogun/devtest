<?php
require('vendor/autoload.php');
$string = isset($_GET['string'])?$_GET['string']:'';
$devTest = new DevTest();
$reverseString = $devTest->reverse($string);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Devtest</title>
</head>
<body>
<form action="index.php">
    <input type="text" name="string" value="<?=$string?>"/>
    <input type="submit"/>
</form>
<div>
    String: <?=$string;?>
</div>
<div>
    Reverse string: <?=$reverseString;?>
</div>
</body>
</html>