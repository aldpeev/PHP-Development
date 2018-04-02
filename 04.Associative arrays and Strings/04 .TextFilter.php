<form action="" method="get">
    <input type="text" name="text">
    <input type="text" name="banlist">
    <input type="submit">
</form>

<?php


if (isset($_GET['text']) && isset($_GET['banlist'])) {
    $input = explode(" ", $_GET['text']);
    $bannedList = explode(", ", $_GET['banList']);

    $str = [];
    foreach ($bannedList as $key) {
        $to_be_replaced = str_repeat("*", strlen($key)); 
        $input = str_replace($key, $to_be_replaced, $input);
    }
    $x = "";

    foreach ($input as $key) {
        $x .= $key . " ";
    }
    print($x);
}

