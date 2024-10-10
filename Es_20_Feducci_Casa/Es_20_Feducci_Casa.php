<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $casa = array("indirizzo" => "tresco", "metri" => 110.50, "prezzoMetro" => 300.5);
        $casa["prezzoTotale"] = $casa["metri"] * $casa["prezzoMetro"];

        echo "<table>";
            echo "<tr>";
                foreach($casa as $chiave => $elemento){
                    echo "<td style='border: solid black 1px'>Chiave: $chiave</td>";
                }
            echo "</tr>";
            echo "<tr>";
                foreach($casa as $elemento){
                    echo "<td style='border: solid black 1px'>Valore: $elemento</td>";
                }
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>