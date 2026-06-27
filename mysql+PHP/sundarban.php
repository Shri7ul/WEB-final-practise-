<?php
$conn = mysqli_connect("localhost", "root", "", "sundarban");

if (!$conn) {
    die("Error" . mysqli_connect_errno());
}

$query = "SELECT CategoryName,SUM(Revenue) AS totalrevenue FROM sales_data GROUP BY CategoryName";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['CategoryName'] . $row['totalrevenue'] . "<br>";
}


$sql = "UPDATE sales_data SET CategoryName='Low Performing' WHERE  Revenue<40000 ";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE sales_data SET Revenue = Revenue*1.10 WHERE Revenue>70000";
$result = mysqli_query($conn, $sql);

$sql = "SELECT s.ProductName , s.CategoryName , s.Revenue,
        CASE 
            WHEN s.Revenue > c.avgrevenue
            THEN 'Top Saller'
            ELSE 'Regular saller'
        END AS Label
        FROM sales_data s
        JOIN(
            SELECT CategoryName ,AVG(Revenue) AS avgrevenue
            From sales_data
            GROUP BY CategoryName
            )c ON s.CategoryName = c.CategoryName

        ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['ProductName'] .$row['CategoryName'] . $row['Label'] . "<br>";
}

mysqli_close($conn);
