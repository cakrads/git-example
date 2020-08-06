<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <?php
        for($i=1;$i<=10;$i++)
        {
            if($i == 2)
            {
                echo "GOOD ";
            }
            else if($i==4)
            {
                echo "BEST ";
            }
            else if( $i ==8)
            {
                echo  "AWESOME ";
            }
            else{
                echo $i." ";
            }
        }
    
    ?>
    </body>

</html>