<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        
<?php
$txt = "Python";
$version = phpversion();
echo "I love $txt!";
echo nl2br (" \n Vilken version $version \n");

include "ex1.php";
include "ex2.php";
?>

    </body>
</html>