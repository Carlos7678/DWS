<?php
echo "for<br>";
for ($i = 5; $i <= 100; $i += 5) {
    echo $i . "<br>";
}

echo "<br>while<br>";
$i=5;
while ($i <= 100) {
    echo $i."<br>";
    $i+=5;
}

echo "<br>do while<br>";
$i = 5;
do {
    echo $i."<br>";
    $i+=5;
} while ($i <= 100);
?>
