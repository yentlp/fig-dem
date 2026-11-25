<?php
require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape(100, 100, '#ff0000');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Fig-dem</title>

</head>
<body>
    <?= $shape->render() ?>
</body>
</html>