<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php
               $text = 'tomosarts future crypto site';
               $textoutput = str_word_count($text);

               echo "mängd med ord: $textoutput" . "<br>";

               $text2 = 'tomosarts future crypto site';

               $w1 = "future";
               $w2 = "past";

               $text2 = str_replace($w1, $w2, $text2);

               echo  " $text2 -------- använder str_replace <br>";


               $str1 = "Future";
               $str2 = "future";
 
 if ($str1 == $str2) {
      echo 'Both strings are equal' . "<br> <br>";
  }
  else {
      echo 'Both strings are not equal' . "<br> <br>";
  }


 
  $lines = file('tomosarts.txt');

  $count = 0;
  
  foreach($lines as $line) {
  
      $count += 1;
  
      echo str_pad($count, 2, 0, STR_PAD_LEFT).". ".$line;
  
  }
  
               
        ?>


<form action="sida.php" method="GET">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php

echo  "<br>";

$sDay = date("D");
  switch ($sDay) {
    case $sDay == "Mon":
        echo "Mondag ätdag";
        break;
    case $sDay == "Tue":
        echo "Tisdag Legday";
        break;
    case $sDay == "Wed":
        echo "Onsdag armday";
        break;
        case $sDay == "Thu":
            echo "Torsdag chest  day";
            break;
            case $sDay == "Fri":
                echo "Fredag blod donerings dag";
                break;
                case $sDay == "Sat":
                    echo "Lördag liggdag";
                    break;
                    case $sDay == "Sun":
                        echo "Söndag backday";
                        break;
                    }
                    echo "<br> <br>";
                    $numbers = array(4, 2, 8, 1, 9); 
                    sort($numbers); 
  
                    $arrlength = count($numbers); 
                    for($x = 0; $x < $arrlength; $x++) { 
                    echo $numbers[$x]; 
                    echo "<br>"; 
} 


?>

<form action="sida2.php" method="POST">
Name: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
<input type="submit">
</form>
<br>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="num1">Enter first number:</label>
  <input type="number" id="num1" name="num1" required><br>
  <label for="num2">Enter second number:</label>
  <input type="number" id="num2" name="num2" required><br>
  <label for="op">Choose an operation:</label>
  <select id="op" name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select><br>
  <input type="submit" name="submit" value="Calculate">
</form>        

<?php

if (isset($_POST['submit'])) {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    
    if (empty($num1) || empty($num2) || !is_numeric($num1) || !is_numeric($num2)) {
      echo "Please enter valid numbers.";
    } else {
      
    }
}

switch ($op) {
    case "+";
      $result = $num1 + $num2;
      break;
    case "-":
     
      $result = $num1 - $num2;
      break;
    case "*":
     
      $result = $num1 * $num2;
      break;
    case "/":
      
      if ($num2 == 0) {
        die("Cannot divide by zero.");
      } else {
       
        $result = $num1 / $num2;
      }
      break;
    default:
      
      echo "Invalid operation.";
    }

    echo "<p>The result of {$num1} {$op} {$num2} is {$result}.</p>";
?>

</body>
</html>