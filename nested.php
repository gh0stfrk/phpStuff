<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/default.min.css">
    <title>Nested Functions</title>
</head>

<body>
    <h1>Nested Functions</h1>
    <p>Functions inside of another function is called a nested function, these functions are not loaded into memory or allowed execution until the parent function is called.</p>
    <pre>
    <code class="language-php">
        function foodArrived(){
            echo "food is at the table";
            function eat(){
                echo "nom nom";
            }
        }
    </code>
    </pre>
    <p>Food will first arrive at the table then we can start eating it, until the food arrives the eat() function can't be called</p>

    <?php
    function isFoodArrived()
    {
        return true;
    }
    function foodArrived()
    {
        $status = isFoodArrived();
        if ($status) {
            function eat($food)
            {
                echo "Eating $food.....<br/>nom nom";
                return;
            }
        }
    }

    $foodItems = ['pizza', 'pasta', 'french fries'];
    foodArrived();
    eat($foodItems[0]);
    ?>

    <h2>Below is the code</h2>
    <pre>
        <code class="language-php">
        function isFoodArrived()
        {
            return true;
        }
        function foodArrived()
        {
            $status = isFoodArrived();
            if ($status) {
                function eat($food)
                {
                    echo "Eating $food.....<br/>nom nom";
                    return;
                }
            }
        }

        $foodItems = ['pizza', 'pasta', 'french fries'];
        foodArrived();
        eat($foodItems[0]);
        </code>
    </pre>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>