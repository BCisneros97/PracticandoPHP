<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <style>
            header {
                background-color: gray;
                padding: 2em;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><?= $greeting ?></h1>
        </header>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed): ?>
                        <strike><?= $task->description; ?></strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
