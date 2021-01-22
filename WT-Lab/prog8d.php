<?php
    $a = Array (Array(1,2), Array(4,5));
    $b = Array (Array(1,2), Array(2,7));

    echo "The input matrix A is:<br \>";
    for($r = 0; $r < 2; $r++) {
        for($c=0; $c < 2; $c++) {
            echo $a[$r][$c]."\t";
        }
        echo "<br \>";
    }

    echo "<br /> The input matrix B is:<br \>";
    for($r = 0; $r < 2; $r++) {
        for ($c=0; $c < 2; $c++) {
            echo $b[$r][$c]."\t";
        }
        echo "<br \>";
    }

    echo "<br /> Addition of matrices A + B is:<br \>";
    for($i=0; $i<2; $i++) {
        for($j=0; $j<2; $j++) {
            echo $a[$i][$j]+$b[$i][$j]."\t";
        }
        echo "<br \>";
    }
?>