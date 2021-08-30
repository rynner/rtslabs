<?php

$number = $_GET['number'];

$array = [1, 5, 2, 1, 10];
function userInput($array, $number){
    sort($array);

    $above = '';
    $below = '';

    foreach ($array as $value) {

        if ($value < $number) {
            $smaller .= ' '.$value;
        }
        if ($value > $number) {
            $below .= $below.' '.$value;
        }
    }

    echo 'above: '.$smaller.', '.'below: '.$below;

}

if ($number) {
    userInput($array, $number);
}
?>

<form action="">
  <label for="number">Number:</label><br>
  <input type="text" id="number" name="number" value="0"><br>
  <input type="submit" value="Submit">
</form>
