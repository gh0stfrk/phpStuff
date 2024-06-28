<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <style></style>
</head>

<body>



    <?php
    // Single line comment 
    # Another single line comment 

    /** Multiline comment that can span a paragraph 
     * can be used for writing comments or commenting old rotten code
     * pretty usefull to write documentation  for functions or modules
     */

    $userName = "salman_";

    function validName($name)
    {
        if ((strlen($name) >= 5)) {
            $pattern = '/[\W0-9]/';
            if (preg_match($pattern, $name)) {
                return false;
            }
            return true;
        }
        return false;
    }
    if (validName($userName)) {
        echo "Valid Name";
    } else {
        echo "username must be >5 characters and cannot conatain any special characters except (_) or numbers";
    }
    ?>

    <div>
        <h1>This is it</h1>
    </div>

    <?php
    echo $userName;
    ?>

</body>

</html>