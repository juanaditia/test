<html>
<body>

<?php
$x = 2;
$y = 8;

$z = 3;

if ($y % 2 == 0) {
    # code...
    for($L = 0; $L < $y; $L++){
        if ($z % $x == 1) {
            # code...
        for($i = 0; $i < $x; $i++){
            for($j = 0; $j < $x; $j++){
                echo 'X';
            }
            for($k = 0; $k < $x; $k++){
                echo '-';
            }

        }
    } 
        else {
            # code...
            for($i = 0; $i < $x; $i++){
                for($j = 0; $j < $x; $j++){
                    echo '-';
                }
                for($k = 0; $k < $x; $k++){
                    echo 'X';
                }
    
            }
        }
        echo '<br/>';
        $z+=1;
    } 
    }
    

?>

</body>
</html>