<?php 
$conn = mysqli_connect("localhost","root","","uiuweb_final");

if(!$conn){
    die ("Error" . mysqli_connect_errno());
}

$query = "SELECT LetterGrade , COUNT(*) AS total
        FROM student_final
        GROUP BY LetterGrade   
    ";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['LetterGrade'] . $row['total'] . "<br>";
}

$query = "UPDATE student_final
        SET LetterGrade = 'C'
        WHERE Grade <75 AND 
        LetterGrade <> 'D'
    ";

$result = mysqli_query($conn,$query);

$query = "UPDATE student_final
        SET Grade = Grade + 5
        WHERE Grade >80 AND 
        Grade +5 <= 90
    ";

$result = mysqli_query($conn,$query);

$query = "SELECT CourseTitle , COUNT(*) AS total
        FROM student_final
         GROUP BY CourseID
         ORDER BY total     
    ";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){
    echo $row['CourseTitle'] . $row['total'] . "<br>";
}

mysqli_close($conn);

?>