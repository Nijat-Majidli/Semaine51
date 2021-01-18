<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercise3</title>
    </head>

    <body>
        <?php
            for ($x=-1; $x<=12; $x++)
            {    
                echo "<b>$x</b> \t";
            }
            echo "<br>";

            for ($a=0; $a<=12; $a++)
            {    
                echo "<b>$a</b> \t";

                for ($b=0; $b<=12; $b++)
                {
                    
                    $c = $a * $b;
                    echo $c."\t";
                }
                
                echo "<br>";
            }
        ?>    
    </body>
</html>