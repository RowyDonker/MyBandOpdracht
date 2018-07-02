<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = ($_GET['q']);//get data from HTML

$con = mysqli_connect('127.0.0.1','20670_myband','Myband','20670_myband');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,'DB_NAME');
$sql="SELECT * FROM Verhalen WHERE title LIKE '$q%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>title</th>
<th>Writer</th>
<th>date_created</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>". $row['title'] . "</td>";
    echo "<td>" . $row['Writer'] . "</td>";
    echo "<td>" . $row['date_created'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>