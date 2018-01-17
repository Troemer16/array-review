<?php
    //part 1
    echo '<h1>Part 1</h1>';

    function SParray($array){
        sort($array);
        foreach ($array as $value)
            echo "$value ";
        echo '<br>';
    }
?>