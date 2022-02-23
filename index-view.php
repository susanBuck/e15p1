<!DOCTYPE html>
<html lang='en'>

<head>
    <title>String Processor - e15 Project 1</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='css/styles.css' rel='stylesheet'>
</head>

<body>
    <main>

        <h1>String Processor - e15 Project 1</h1>

        <div id='instructions'>
            <h2>Instructions</h2>
            <p>Enter a word to find out...
            <ul>
                <li>Is it a Palindrome? (Same forwards and backwards)
                <li>How many vowels does it contain?
                <li>What the word would look like if every letter was shifted +1 places in the alphabet</li>
            </ul>
        </div>
        <form method='GET' action='process.php'>

            <label for='inputString'>Your word:</label>
            <input type='text' id='inputString' name='inputString' value='<?php echo $inputString ?? "" ?>'>

            <button type='submit'>Process</button>
        </form>

        <?php if (isset($inputString)) { ?>
        <div id='results'>
            <h2>Results for: <span id='word'><?php echo $inputString; ?></span>
            </h2>

            <p>
            <h3>Is it a palindrome?</h3> <?php echo ($taskA) ? '✓ Yes' : 'No' ?>
            </p>

            <p>
            <h3>How many vowels does it contain?</h3> <?php echo $taskB; ?>
            </p>
            <p>
            <h3>Letter shift</h3> <?php echo $taskC; ?>
            </p>
        </div>
        <?php } ?>

    </main>
</body>

</html>