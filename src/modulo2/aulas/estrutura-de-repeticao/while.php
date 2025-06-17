<?php
$count = 1;
echo "hello world!";
echo "<br>";
while($count< 18){
    echo "menor que 18 [$count]";
    echo "<br>";
    $count++;
}

do {
    echo "Maior que 10[$count]";
    echo "<br>";
    $count--;
} while($count > 10);