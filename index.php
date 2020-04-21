<?php
include_once "Classes/DivideByZeroException.php";

function divide($numberator, $denominator) {
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numberator/$denominator;
}

try {
    $result = divide(300, 5);
    echo $result;
    $result = divide(100, 0);
    echo $result;
} catch (DivideByZeroException $e) {
    echo "<br>";
    echo "Error!! " .$e;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Khai báo lớp exception tuỳ biến</title>
</head>
<body>

</body>
</html>
