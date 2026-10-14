
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 2 - Area Calculator</title>
</head>
<body>
    <h1>Mission 2: Safe Area Calculator</h1>

    <?php
    function calculateArea($length, $width) {
        if (!is_numeric($length) || !is_numeric($width)) {
            throw new InvalidArgumentException(
                "Both dimensions must be numeric."
            );
        }

        $length = (float) $length;
        $width = (float) $width;

        if ($length < 0 || $width < 0) {
            throw new InvalidArgumentException(
                "Dimensions cannot be negative."
            );
        }

        return $length * $width;
    }

    $testCases = [
        [3, 4],
        [7.4, 7.5],
        ["2.5", "4"],
        [0, 4],
        [-1, 4],
        ["two", 4]
    ];
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Length (ft)</th>
            <th>Width (ft)</th>
            <th>Result</th>
        </tr>

        <?php foreach ($testCases as $test): ?>
            <tr>
                <td><?php echo htmlspecialchars((string) $test[0]); ?></td>
                <td><?php echo htmlspecialchars((string) $test[1]); ?></td>
                <td>
                    <?php
                    try {
                        $area = calculateArea($test[0], $test[1]);

                        echo htmlspecialchars(
                            (string) $area
                        ) . " sq ft";
                    } catch (InvalidArgumentException $error) {
                        echo htmlspecialchars($error->getMessage());
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Explanation</h2>

    <p>
        The calculateArea() function checks both dimensions
        using is_numeric() before performing multiplication.
    </p>

    <p>
        Valid dimensions are converted to numbers.
        Negative values are rejected with an exception.
    </p>

    <p>
        Zero is accepted because an area of zero is valid.
        Invalid input produces an error rather than
        silently returning zero.
    </p>

    <p>
        The function returns the calculated area.
        The caller handles formatting, display,
        and exceptions.
    </p>

    <p><a href="index.php">Back to Home</a></p>
</body>
</html>
