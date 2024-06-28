<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML</title>
    <style>
        .name {
            color: green;
            text-align: center;

        }

        .card {
            background-color: black;
            border: 2px solid green;
            color: white;
            text-align: center;
            width: fit-content;
            padding: 1rem;
        }
        .container {
            display: flex;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <h1 class='name'>Using html with php</h1>

    
    <?php echo "<h2>PHP is awesome</h2>"; ?>

    <div class="container">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<h1 class='card'>$i</h1>";
        }
        ?>
    </div>
</body>

</html>