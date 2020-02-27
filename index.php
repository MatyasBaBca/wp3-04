<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>pirátství o zásoby</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  </head>
  <body>
    <?php
    $cargoApal = 100;
    $cargoBotak = 0;
    $cargoShipHP = 200;

    while ($cargoBotak != 100) {
        // Náklad
        $cargoApal = $cargoApal - 10;
        echo "Zásoby z ostrova Apal naloženy na loď.<br>";
        echo "<br>";
        for ($i=0; $i != 6; $i++) {
            $pirateDamage = rand(1, 7);
            echo "Piráti vystřelili a udělili $pirateDamage bodů poškození.<br>";
            $cargoShipHP = $cargoShipHP - $pirateDamage;
            if ($cargoShipHP <= 0) {
                die("Loď se potopila!<br><hr /> Zásoby na ostrově Apal: $cargoApal.<br> Zásoby na ostrově Botak: $cargoBotak.<br>");
            }
            echo "Aktuální stav nákladní lodi je $cargoShipHP HP.<br>";
        }
        echo "<br>";


        $cargoBotak = $cargoBotak + 10;
        echo "Zásoby vyloženy na ostrov Botak. Loď pluje zpět a protože je bez nákladu, tak upluje pirátům.<br /><br />";
        echo "Zásoby na ostrově Apal: $cargoApal.<br />";
    }
    ?>




  </body>
</html>