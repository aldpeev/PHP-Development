<?php
$numbers = explode(" ", trim(fgets(STDIN)));
$result = [];
foreach ($numbers as $number) {
    if (!array_key_exists((string)$number, $result)) {
        $result[(string)$number] = 0;
    }

    $result[(string)$number]++;
}

ksort($result); //
foreach ($result as $key => $val) {
    echo $key . " -> " . $val . " times\n";
}