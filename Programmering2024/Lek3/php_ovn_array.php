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
            $code = array("Javascript", "Php", "C#", "C++"); 

            foreach ($code as $x) {
                echo "$x <br>";
              }

              $peng = array (
                array("Bulla",1.50,10),
                array("Kaka",5.00,4),
                array("Pirog",2.50,12)
              );
              foreach ($peng as $i) {
                echo $i[0]  . " "   .   $i[1] . " " . $i[2] . "<br>"; 
              }

              echo "<br> Priset på bulla: " . $peng[0][1];
              echo "<br> Antalet med piroger: " . $peng[2][2];

              echo "<br>";
              echo "<br>";
              echo "Antalet med bakelser ";
              echo count($peng);
              
              $total = 0;

              for($x = 0; $x <= 2; $x++) {
                $total += $peng[$x][2];
              }

              echo "<p>Antalet med produkter $total</p>";
                

              
        ?>
        
        <script src="" async defer></script>
    </body>
</html>