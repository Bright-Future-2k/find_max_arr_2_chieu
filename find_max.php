<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arr = [
    [2,4,6],
    [3,7,1],

];
function find_max($arr)
{

    $max = [0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    echo $max;
}
find_max($arr);
?>
</body>
</html>
