<?php
    require 'lib/data-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jedi Survey</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">

    <style>
        body {
            background: black url('Hyperspace-SWPuzzle.jpg') center/cover fixed;
        }
    </style>
</head>
<body  class="d-flex justify-content-center">
    <div class="py-3 mt-5 w-50 bg-dark text-info border border-light">
        <h1 class="pl-3">Details of <?php echo $_GET['name']; ?></h1><br>
        <ul class="text-uppercase pr-5"><?php  
            foreach ($_GET as $key => $value) {
                if ($key=='id') {
                    continue;
                } else {
                echo '<li class="d-flex justify-content-between"><span>' . $key . ':</span> <span>' . $value . '</span></li><br>' ;
                }
            }
        ?></ul>
        <div class="d-flex justify-content-around">
            <a href="index.php">Go to the form</a><br>
            <a href="list.php">Go to the list</a><br>
        </div>
    </div>
</body>
</html>