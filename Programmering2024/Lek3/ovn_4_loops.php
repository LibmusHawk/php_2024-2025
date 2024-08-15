<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php

$i = 0;
while ($i <= 6):
    echo "hej på dig";
    echo "<br>";
    $i++;
endwhile;


echo "<br>";
echo "<br>";

$u = 1;

do {
  echo $u;
  $u++;
} while ($u < 11);

echo "<br>";
echo "<br>";

for ($x = 0; $x <= 6; $x++) {
    echo "hej på dig <br>";
  }

  echo "<br>";

  $capital = array (
    "Finland" => "Helsingfors",
    "Sverige" => "Stockholm",
    "Japan" => "Tokyo",
    "Tyskland" => "Berlin",
  );
  foreach ($capital as $country => $city) {
    echo $city . " Är Huvudstaden av "   .   $country . "<br>"; 
  }

  echo "<br>";

  $str = "audi jeep volkswagen ford opel";
  $strarray = explode(" ",$str);

  foreach ($strarray as $x) {
    echo "$x <br>";
  }

  echo "<br>";echo "<br>";
  $ii = 0;
  $rad = 5;
  

  if ($rad == 0)
  {
    echo "värdet är noll";
  }
  elseif ($rad == 1)
  {
    echo "Endast en rad";
  }
  elseif ($rad > 2 && $rad < 10)
  {
    while($ii < $rad) {
        echo "New row <br>";
        $ii++;
    }
  }
  else
  {
    echo "För många rader";
  }

echo "<br>";

  $name = array(
    'Krukar',
    'Femto',
    'Blomma'
  );

  $months = array(
    'Januari',
    'Februari',
    'Mars',
    'April',
    'Maj',
    'Juni',
    'Juli',
    'Augusti',
    'September',
    'Oktober',
    'November',
    'December'
  );

  $birthdays = array(
    'Krukar' => '02.04.1922',
    'Femto' => '02.04.1922',
    'Blomma' => '02.02.1922'
  );

  foreach($birthdays as $name => $birthday) {
    echo $name . ' är född i ' .
    $months[str_replace('0', '', explode('.',$birthday)[1])-1] . '<br>';
  }

  echo "<br>";

  $städer = array (
    "Helsingfors" => "601 035",
    "Esbo" => "255 121",
    "Tammerfors" => "216 586",
    "Vanda" => "204 545",
    "Åbo" => "179 529",
  );
  asort($städer);

  foreach ($städer as $stad => $nummer) {
    echo $stad . " har "   .   $nummer . "<br>"; 
  }
?>  
        
        <script src="" async defer></script>
    </body>
</html>