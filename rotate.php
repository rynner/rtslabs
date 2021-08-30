<?php

$word = $_GET['word'];
$rotate = $_GET['rotate'];

function userInput($word, $rotate){
    $wordLength = strlen($word);
    $offSet = $wordLength - $rotate;
    return substr($word, $offSet, $wordLength) . substr($word, 0, $offSet);

}

if ($word && $rotate) {
    echo 'Rotated Word: '.userInput($word, $rotate);
}


?>
<br>
<br>
<form action="">
  <label for="character">Word:</label><br>
  <input type="text" id="word" name="word"><br>
  <label for="character">Rotate:</label><br>
  <input type="number" id="rotate" name="rotate"><br>
  <input type="submit" value="Submit">
</form>
