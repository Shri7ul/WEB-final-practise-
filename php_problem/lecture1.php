<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>UIU Tech Fest</h1>
    <form action="" method="post">
        <label for="">Attendees </label>
        <input type="number" name="att" id="">
        <br> <br>

        <label for="">Cost per Person </label>
        <input type="number" name="cpp" id="">
        <br> <br>

        <label for="">Venue Capacity</label>
        <input type="number" name="vc" id="">
        <br> <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php 
 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $att = $_POST['att'];
    $cpp = $_POST['cpp'];
    $vc = $_POST['vc'];

    $tv = ceil($att / $vc);

    $es = ($tv * $vc ) - $att;

    $wm = $es * $cpp;

    echo "Total Venues " . $tv . "<br>";
    echo "Empty Seats " . $es . "<br>";
    echo "Wasted Money (BDT)  " . $wm . "<br>";


 }
?>