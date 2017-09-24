<?php
    require 'lib/data-functions.php';
    $index = get_index();

    function li_generator($index) {
        foreach ($index as $key => $value) {
            $id=$key;
            $data=get_data($id);
            $query_string = http_build_query($data);
            echo "<li>$key : $value<br><a href='detail.php?id=$id&$query_string'>See details</a></li><br>";
        }
    }
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
<body class="d-flex justify-content-center">
    <div class="py-3 mt-5 w-25 bg-dark text-info border border-light">
        <h1 class="pl-3">List of Jedi's</h1>
        <ul class="d-flex flex-column text-uppercase">
            <?php li_generator($index) ?>
        </ul>
        <a class="d-flex justify-content-center" href="index.php">Go to the form</a>
    </div>
</body>
</html>