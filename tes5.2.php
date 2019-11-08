<?php
for ($row = 1; $row <= 10; $row++) {
    $chars = '';

    for ($col = 0; $col < $row; $col++) {
        $chars .= '*';
    }

    echo "$chars\n";
}

echo "\nTWO TRIANGLES\n\n";

// Print a triangle.
for ($row = 1; $row <= 10; $row++) {
    $chars = '';

    for ($col = 0; $col < $row; $col++) {
        $chars .= '*';
    }

    echo "$chars\n";
}
?>