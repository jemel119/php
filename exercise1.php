
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission 1 - Eligibility Checker</title>
</head>
<body>
    <h1>Mission 1: Eligibility Checker</h1>

    <?php
    function isEligible($age = 18) {
        return $age >= 18;
    }

    $testCases = [
        ["age" => 17, "result" => isEligible(17)],
        ["age" => 18, "result" => isEligible(18)],
        ["age" => "Default (18)", "result" => isEligible()]
    ];
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Age</th>
            <th>Result</th>
        </tr>

        <?php foreach ($testCases as $test): ?>
            <tr>
                <td><?php echo $test["age"]; ?></td>
                <td>
                    <?php
                    echo $test["result"] ? "Eligible" : "Not Eligible";
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Explanation</h2>

    <p>
        The function returns true when the age is 18 or older
        and false otherwise.
    </p>

    <p>
        The default parameter is 18. Calling isEligible()
        without an argument uses this default value.
        Passing an age overrides the default.
    </p>

    <p>
        The function returns a boolean instead of displaying
        text directly. The result is displayed outside the function.
    </p>

    <p><a href="index.php">Back to Home</a></p>
</body>
</html>
