<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N
);

$horsesPower = [];

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi
    );
    $horsesPower[] = abs($Pi);
}

// Sort the array from small to large
sort($horsesPower);

$minValue = 100000000;

// Compare the each value with the following one (which is the closest)
for ($j = 0; $j < ($N - 1); $j++) {

    $diff = $horsesPower[$j + 1] - $horsesPower[$j];

    if ($diff < $minValue) {

        $minValue = $diff;

    }
}

echo("$minValue\n");
?>