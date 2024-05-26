<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>
<body>
    <?php $mode = "light" ?>

    <?php if ($mode == "light") : ?>
        <div style='height: 1500px; background: white; color: black; padding: 20px;'>
            <h1 style='margin: 0'>Hello PHP</h1>
        </div>
    <?php else : ?>
        <div style='height: 1500px; background: black; color: white; padding: 20px;'>
            <h1 style='margin: 0'>Hello PHP</h1>
        </div>
    <?php endif ?>
</body>
</html>