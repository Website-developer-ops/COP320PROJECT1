
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $cars = array("Volvo", "BMW","Toyota");
            $arrLength = count($cars);

            for($x=0;$x < $arrLength; $x++){
                echo $cars[$x];
                echo "<br>";
            }
        ?>
    </body>
</html>
