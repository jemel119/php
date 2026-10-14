
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 3 - Probability Challenge</title>
</head>
<body>
    <h1>Mission 3: Random Event and Explicit Scope</h1>

    <?php
    function isBitten() {
        return rand(0, 1) === 1;
    }

    function winnerMessage($name) {
        return "The winner is " . $name . "!";
    }

    $winner = "Charlie";
    $bitten = isBitten();
    ?>

    <h2>Random Event</h2>

    <p>
        <?php
        if ($bitten) {
            echo "Charlie bit your finger!";
        } else {
            echo "Charlie did not bite your finger!";
        }
        ?>
    </p>

    <h2>Winner Message</h2>

    <p><?php echo htmlspecialchars(winnerMessage($winner)); ?></p>

    <h2>Ten Random Trials</h2>

    <?php
    $biteCount = 0;
    $noBiteCount = 0;
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Trial</th>
            <th>Outcome</th>
        </tr>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php
            $result = isBitten();

            if ($result) {
                $biteCount++;
            } else {
                $noBiteCount++;
            }
            ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <?php
                    echo $result ? "Bite" : "No Bite";
                    ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>

    <p>Bite count: <?php echo $biteCount; ?></p>
    <p>No-bite count: <?php echo $noBiteCount; ?></p>

    <h2>Explanation</h2>

    <p>
        The isBitten() function randomly returns true or false.
        Each outcome has an equal probability, but ten trials
        do not necessarily produce five bites and five non-bites.
    </p>

    <p>
        The winnerMessage() function receives a name as a parameter
        and returns a message. It does not need to access a global variable.
    </p>

    <p>
        Passing values as parameters makes functions easier to reuse,
        understand, and test because their dependencies are explicit.
    </p>

    <p>
        The random function is intended for simulation practice,
        not security-sensitive applications.
    </p>

    <p><a href="index.php">Back to Home</a></p>
</body>
</html>
