function printTriangle()
{
    for ($row = 1; $row <= 10; $row++) {
        $chars = '';

        for ($col = 0; $col < $row; $col++) {
            $chars .= '🍉';
        }

        echo "$chars\n";
    }
}

printTriangle();
echo "\nTWO TRIANGLES\n\n";
printTriangle();