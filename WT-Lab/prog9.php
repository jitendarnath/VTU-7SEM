<h3><u>Jitendra Nath | 1VI17IS035</u></h3>
<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray = [];
    $states1 = explode(' ',$states);

    foreach($states1 as $state)
    { 
        if(preg_match( '/xas$/',($state)))
            $statesArray[0] = ($state);
    }
    foreach($states1 as $state)
    { 
        if(preg_match('/^k.*s$/i',($state)))
            $statesArray[1] = ($state);
    }
    foreach($states1 as $state)
    { 
        if(preg_match('/^M.*s$/',($state)))
            $statesArray[2] = ($state);
    }
    foreach($states1 as $state)
    { 
        if(preg_match('/a$/',($state)))
            $statesArray[3] = ($state);
    }

    echo "The extracted states are as follows: <br /> <br />";
    foreach ( $statesArray as $element => $value ){
        print( "statesArray[$element] = $value <br />");
    }
?>