<!DOCTYPE html>
<html lang='en'>

<head>

    <title>e15 Project 1</title>
    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>
        body {
            font-family: Helvetica;
        }

        .container {
            width: 500px;
            text-align: center;
            margin: auto;
        }

        ul {
            text-align: left;
        }
    </style>

</head>

<body>

    <div class='container'>

        <h1>e15 Project 1</h1>

        <h2>Task A. Time addition</h2>
        <?= timeAddition() ?>

        <h2>Task B. Vowel count</h2>
        <ul>
            <?php foreach($taskBResults as $string => $result): ?>
            <li><?=$string?> => <?=$result?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Task C. Letter shift</h2>
        <ul>
            <?php foreach($taskCResults as $string => $result): ?>
            <li><?=$string?> => <?=$result?></li>
            <?php endforeach; ?>
        </ul>

    </div>
</body>

</html>