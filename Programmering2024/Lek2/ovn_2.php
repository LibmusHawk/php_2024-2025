<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 $i = 6;


 if ($i > 1) {
     echo "$i är större än 2 <br>";
   }


$kalle = "kock";

if ($kalle == "kock")
{
    echo "kalle är en " . $kalle ."<br>";
}
elseif ($kalle == "Svetsare")
{
    echo "Kalle är inte en svetsare";
}
elseif ($kalle == "Kodare")
{
    echo "Kalle är inte en Kodare";
}
else
{
    echo " <p> Kalle vet inte vad han är </p>";
}

$Kalle = "Svetsare";

switch ($Kalle) {
    case $Kalle == "Svetsare":
        echo "Kalle är en " . $Kalle;
        break;
    case $Kalle == "Kodare":
        echo "Kalle är inte en kodare";
        break;
    case $Kalle == "Kock":
        echo "Kalle är inte en kock";
        break;
}

$x = 5;
if ($x > 2  && $x < 10) {
    echo "<br> $x är Mellan 2-10 <br>";
  }
  

  echo date("D");
$today = date("D");

if($today == "Mon")
{
    echo " <br>Det är Måndag!!!";
}
elseif($today == "Tue")
{
    echo "<br>Det är Tisdag!!!";
}
elseif($today == "Wed")
{
    echo "<br>Det är Onsdag!!!!";
}

elseif($today == "Thu")
{
    echo "<br>Det är Torsdag!!!";
}

elseif($today == "Fri")
{
    echo "<br>Det är Fredag!!!";
}

elseif($today == "Sat")
{
    echo "<br>Det är Lördag!!!";
}
elseif($today == "Sun")
{
    echo "<br>Det är Söndag!!!";
}
else
{
    echo "<br>Ingen dag";
}




?>
    
</body>
</html>