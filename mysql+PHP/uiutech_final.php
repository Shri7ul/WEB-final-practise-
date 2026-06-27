<?php

$conn = mysqli_connect("localhost","root","","uiutech_final");

if(!$conn){
    die ("Error" . mysqli_connect_error());
}

$query = " SELECT PerformanceRating , COUNT(*) AS total
            FROM employee_final
            GROUP BY PerformanceRating
            ORDER BY total DESC
";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['PerformanceRating'] . " :" . $row['total'] . "<br>";

}

$query = " UPDATE employee_final
            SET PerformanceRating ='C'
            WHERE Salary <40000 AND
            PerformanceRating <> 'D'
";

$result = mysqli_query($conn,$query);

$query = " UPDATE employee_final
            SET Salary =Salary + 5000
            WHERE Salary >50000 AND
            Salary + 5000 <= 60000
";

$result = mysqli_query($conn,$query);

$query = " SELECT DepartmentName , COUNT(*) AS total
            FROM employee_final
            GROUP BY DepartmentName
            ORDER BY total DESC
";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['DepartmentName'] . " :" . $row['total'] . "<br>";

}

mysqli_close($conn);
?>