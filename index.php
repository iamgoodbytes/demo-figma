<?php
require_once __DIR__ . '/classes/Shape.php';

$shape = new Shape('red', 50, 50);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma</title>
    <style>
        .canvas {
            position: relative;
            width: 600px;
            height: 400px;
            border: 1px solid #ccc;
        }

        .shape {
            position: absolute;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="canvas">
        <div class="shape" style="
            left: <?= $shape->getX() ?>px;
            top: <?= $shape->getY() ?>px;
            background-color: <?= htmlspecialchars($shape->getColor()) ?>;
        "></div>
    </div>
</body>
</html>
