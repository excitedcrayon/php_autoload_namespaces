<?php include_once 'autoloader.php'; ?>
<?php use Vehicle\Car as Car; ?>
<?php use Animal\Dog as Dog; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Namespaces</title>
</head>

<body>
    <p>
        <?php $car = new Car; ?>
    </p>
    <p>
        <?php $dog = new Dog; ?>
    </p>
</body>

</html>
