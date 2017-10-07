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
            <h1>
                <?= "Hello, " . htmlspecialchars($_GET['name']) ?>
            </h1>
        </header>
    </body>
</html>
