<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <?php
        $today = date("d m Y h:i:s");
    ?>
    <p>
        Today: <?= $today ?> <!--php output tag => not write echo -->
        <!-- <?php echo date("d m Y"); ?> -->
    </p>
</body>
</html>