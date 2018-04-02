<form action="">
    <textarea name="input" id="" cols="30" rows="10" required></textarea><br>
    <input type="submit" placeholder="Color Text">
</form>

<?php
if (isset($_GET['input'])) {
    $test = trim($_GET['input']);
    $noFreeSpaces = preg_replace('/\s+/', '', $test);  

    for ($i = 0; $i < strlen($noFreeSpaces); $i++) {
        if ((ord($noFreeSpaces[$i])) % 2 == 0) {  
            echo "<font color='red'>{$noFreeSpaces[$i]} </font>";
        } else {
            echo "<font color='blue'>{$noFreeSpaces[$i]} </font>";
        }
    }
}