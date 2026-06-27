<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Items Input Solds per day</label>
        <input type="number" name="isd" id="">
        <br> <br>

        <label for="">Number of days sale</label>
        <input type="number" name="nds" id="">
        <br> <br>

        <label for="">target number or items</label>
        <input type="number" name="tm" id="">
        <br> <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isd = $_POST['isd'];
    $nds = $_POST['nds'];
    $tm = $_POST['tm'];

    $ti = $isd * $nds;
    $result = $tm - $ti;

    echo "Total Items Sales :" . $ti . "<br>";

    if($ti<150){
        echo "Poor". "<br>";
    }
    else if($ti<300){
        echo "Average". "<br>";
    }
    else if($ti<500){
        echo "Good". "<br>";
    }
    else {
        echo "Excellent". "<br>";
    }

    if($result == 0){
        echo "Target met exactly (0 )". "<br>";
    }
    else if($result >0){
        echo "Above target by". $result . "<br>";
    }
    else {
        echo "Below target by". $result . "<br>";
    }
}
?>