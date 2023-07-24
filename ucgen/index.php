<?php 

function ucgen($n) {
    for ($i = 1; $i <= $n; $i++) {
        $j = 1;
        while ($j <= $i) {
            echo "O ";
            $j++;
        }
        echo "<br>";
    }
}

ucgen(10);

?>
