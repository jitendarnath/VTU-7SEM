<?php
    $a = Array(Array(1,2),Array(4,5));
    $b = Array(Array(1,1),Array(1,1));

    echo "The input matrix A is:<br \>";
    for($r = 0; $r < 2; $r++) {
        for($c=0; $c < 2; $c++){   
            echo $a[$r][$c]."\t";
        }
        echo "<br \>";
    }
    
    echo "<br \> The input matrix B is:<br \>";
    for($r = 0; $r < 2; $r++) {
        for($c=0; $c < 2; $c++){ 
            echo $b[$r][$c]."\t";
        }
        echo "<br \>";
    }
    $res = Array(); 
    for($i=0;$i<2; $i++) {
        for($j=0; $j<2; $j++) {
            $res[$i][$j]=0;

            for($k=0; $k<2; $k++) {
                $res[$i][$j]=$res[$i][$j]+($a[$i][$k]*$b[$k][$j]);
            }
        }
    }

    echo "<br \>Matrix multiplication A x B : <br \>";
    for($r = 0; $r < 2; $r++) { 
        for($c=0; $c < 2; $c++) {
            echo $res[$r][$c]."\t";
        }
        echo "<br \>";
    }
?>