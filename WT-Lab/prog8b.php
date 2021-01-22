<?php
    $matrix = array(
                    array(4, 1, 2),
                    array(6, 3, 4)
                    );
    $rowCount= count($matrix); //Provides the row count of matrix
    $colCount = count($matrix[0]); //Provides the column count of matrix

    echo "The input matrix is: <br />";
    for($r = 0; $r < $rowCount; $r++){ 
        for($c = 0; $c < $colCount; $c++){
            echo $matrix[$r][$c]."\t";
        }
        echo "<br \>";
    }

    echo "<br />Transpose Matrix: <br />";
    for($r = 0; $r < $colCount; $r++){ 
        for($c = 0; $c < $rowCount; $c++){
            echo $matrix[$c][$r]."\t";
        }
        echo "<br \>";
    }
?>