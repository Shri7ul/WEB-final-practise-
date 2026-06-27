<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Number of students:</label>
        <input type="number" name="student" id="">
        <br><br>

        <label for="">Slice per student:</label>
        <input type="number" name="slice" id="">
        <br><br>

        <label for="">Slice per pizza:</label>
        <input type="number" name="pizza" id="">
        <br><br>

        <input type="submit" value="Submit">
        <br><br>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student = $_POST['student'];
    $slice = $_POST['slice'];
    $pizza = $_POST['pizza'];

    $total = ceil(($student * $slice) / $pizza);

    echo "Total Pizzas :" . $total . "<br>";

    $left = ($total * $pizza) - ($slice * $student);

    echo "leftover silce :" . $left . "<br>";
    
    $wsted = (1050 / $pizza) * $left;
    echo "Wasted Money :" . $wsted . "<br>";
}

?>