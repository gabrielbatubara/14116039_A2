<!DOCTYPE htm>
<html>
    <head></head>
    <body>
        <?php
            echo "Bilangan prima dari 50: <br>";
            for($i=2; $i<=50; $i++){
                $bilprima = TRUE;
                for($j=2; $j<$i; $j++){
                    if($i%$j==0){
                        $bilprima = FALSE;
                        break;
                    }
                }
                if($bilprima){
                    echo $i ." ";
                }
            }
        ?>
    </body>
</html>