<?php

/**
 * Boucles While
 */
$i = 0;
while ($i < 10) {
    $i++;
    var_dump($i);
}
$k = 0;
while ($k < 11) {
    if ($k % 2 === 0) {
        var_dump($k);
    }
    $k++;
}
$k = 0;
while ($k < 11) {
    var_dump($k);
    $k += 2;
}

/**
 * Boucles For
 */
for ($i=0; $i < 10; $i++) { 
    var_dump($i);
}
echo "<hr>";
for ($i = 0; $i < 10; $i += 2) {
    var_dump($i);
}
echo "<hr>";
for ($i = 0; $i < 15; $i++) {
    if ($i >= 5) {
        var_dump($i);
    }
}
echo "<hr>";
echo "autre boucle pour le meme résultat";
for ($i = 5; $i <= 15; $i++) {
    var_dump($i);
}
?>

<!-- /** inclus dans le html */ -->
<html>
<body>
    <select name="" id="">
        <?php for ($i = 1900; $i <= 2020; $i++) : ?>
            <option value=""><?php echo $i ?></option>
        <?php endfor; ?>
    </select>
</body>
</html>
