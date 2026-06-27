<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">CT 1: </label>
        <input type="number" name="ct1" id="">
        <br><br>

        <label for="">CT 2: </label>
        <input type="number" name="ct2" id="">
        <br><br>

        <label for="">CT 3: </label>
        <input type="number" name="ct3" id="">
        <br><br>

        <label for="">Midterm Marks: </label>
        <input type="number" name="mid" id="">
        <br><br>

        <label for="">Final Marks: </label>
        <input type="number" name="final" id="">
        <br><br>

        <input type="submit" value="Submit">

    </form>
</body>

</html>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $ct1 = $_POST['ct1'];
        $ct2 = $_POST['ct2'];
        $ct3 = $_POST['ct3'];
        $mid = $_POST['mid'];
        $final = $_POST['final'];

        $small = min($ct1 , $ct2 , $ct3);

        $best = ($ct1 + $ct2 + $ct3) - $small;

        $total = $best + $mid + $final;

        echo "Best two CTs total: " . $best . "<br>";
        echo "Midterm Marks: " . $mid . "<br>";
        echo "final marks: " . $final . "<br>" . "<br>" ."<br>" ;
        echo "Total Marks: " . $total . "<br>";

        if($total > 54){
            echo "Status : Passed";
        }
        else{
                echo "Failed";
        }



    }
?>