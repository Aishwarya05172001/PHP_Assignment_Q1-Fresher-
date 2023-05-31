<!DOCTYPE html>
<html>
    <head>
        <title> Student Report Generated </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
    // Function to calculate the grade
    function calculateGrade($marks) {
        if ($marks >= 75) {
            return "Distinction";
        } elseif ($marks >= 60 && $marks <= 74) {
            return "First Class";
        } elseif ($marks >= 33 && $marks <= 59) {
            return "Pass";
        } else {
            return "Fail";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentName = $_POST["studentName"];
        $marksObtained = $_POST["marksObtained"];
        $totalMarks = $_POST["totalMarks"];

        $percentage = ($marksObtained / $totalMarks) * 100;
        $grade = calculateGrade($percentage);

        echo "<h2><center>Student Report</center></h2><br>";
        echo "<table>";
        echo "<tr><th>Student Name</th><th>Marks Obtained</th><th>Total Marks</th><th>Percentage</th><th>Grade</th></tr>";
        echo "<tr><td>$studentName</td><td>$marksObtained</td><td>$totalMarks</td><td>$percentage</td><td>$grade</td></tr>";
        echo "</table><br>";
        echo "<p><strong>Report Generated On:</strong> " . (date("Y-m-d")) . "</p>";
        date_default_timezone_set('Asia/Kolkata');
        echo "<p><strong>Time:</strong> " . date('h:i:sa') . "</p>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>