<!DOCTYPE html>
<html lang='en'>

<head>
    <title>String Processor - e15 Project 1</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='css/styles.css' rel='stylesheet'>
</head>

<body>
    <div class='container'>

        <h1>String Processor - e15 Project 1</h1>
        <form method='GET' action='process.php'>

            <label for='inputString'>Enter a string</label>
            <input type='text' id='inputString' name='inputString'>

            <button type='submit'>Process</button>
        </form>

        <?php if ($results): ?>
        <div id='results'>
            <h2>Results</h2>

            <p>
                <h3>String</h3> <?= $results['inputString'] ?>
            </p>

            <p>
                <h3>Is palindrome?</h3> <?= $results['taskA'] ? 'Yes' : 'No' ?>
            </p>

            <p>
                <h3>Vowel count:</h3> <?= $results['taskB'] ?>
            </p>
            <p>
                <h3>Letter shift:</h3> <?= $results['taskC'] ?>
            </p>
        </div>
        <?php endif; ?>

    </div>
</body>

</html>