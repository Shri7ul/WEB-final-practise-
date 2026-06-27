<?php
$conn = mysqli_connect("localhost","root","","campus_library");

if (!$conn) {
    die("Error" . mysqli_connect_errno());
}

$query = "SELECT Status,COUNT(*) AS totalbooks
        FROM book_loans 
        GROUP BY Status
        HAVING COUNT(*) > 1";
$result = mysqli_query($conn , $query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['Status'] . ": " . $row['totalbooks'] . "<br>";
}

$sql = "UPDATE book_loans 
        SET Status ='Grace Period',
        PenaltyFee =0.00 
        WHERE Status ='Overdue' AND
        DaysOverdue > 7
        ";
$result = mysqli_query($conn , $sql);

$sql = "UPDATE book_loans 
        SET PenaltyFee = PenaltyFee *1.10
        WHERE PenaltyFee >20.00 AND
        PenaltyFee*1.10 <=50.00
        ";
$result = mysqli_query($conn , $sql);

$sql = "SELECT BookTitle , PenaltyFee , SUM(PenaltyFee) AS totalfee
        FROM book_loans
        GROUP BY BookTitle
        ORDER BY totalfee DESC
        ";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['BookTitle'] . ": " . $row['totalfee'] . "<br>";
}



mysqli_close($conn);
?>