<?php
    //part 1
    echo '<h1>Part 1</h1>';

    function SParray($array){
        sort($array);
        foreach ($array as $value)
            echo "$value ";
        echo '<br>';
    }

    function arrayAdd($string, &$array){
        echo "adding $string..";

        if(!in_array(strtolower($string), array_map('strtolower', $array)))
            array_push($array, $string);

        echo '<br>';
    }

    $animals = array('panda', 'alpaca', 'boa');

    SParray($animals);
    arrayAdd('goat', $animals);
    SParray($animals);
    arrayAdd('Boa', $animals);
    SParray($animals);

    echo '<br>';
    echo '<br>';

?>