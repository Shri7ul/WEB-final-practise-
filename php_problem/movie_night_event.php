<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">Attendence</label>
        <input type="number" name="attendence" id="">
        <br> <br>

        <label for="">Seat Capacity</label>
        <input type="number" name="seat_capacity" id="">
        <br><br>

        <label for="">Ticket Prize</label>
        <input type="number" name="ticke_prize" id="">
        <br><br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>
<?php
   if($_SERVER['REQUEST_METHOD'] == "POST"){
    $att = $_POST["attendence"];
    $sa = $_POST["seat_capacity"];
    $tp = $_POST["ticke_prize"];
    
    $total_screen = ceil($att / $sa);

    $empty_screen = ($total_screen * $sa) - $att ;

    $wasted = $empty_screen * $tp ;

    echo $total_screen . "<br>";
    echo $empty_screen . "<br>";
    echo $wasted . "<br>";

   }

?>
