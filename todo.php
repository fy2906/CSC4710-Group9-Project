<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<?php
    include("data_layer.php");
    $servername ="localhost";
    $username ="id17781984_admin";
    $password = "<?g+im]YWvi/vs43";
    $database="id17781984_todo";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $result = mysqli_query($conn,"SELECT * FROM tbl_todo");
    echo "<table>
            <tr>
                <th>Description</th>
                <th>Due Date</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Status</th>
            </tr>";
            
            while ($r = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $r[0] . "</td>";
                echo "<td>" . $r[1] . "</td>";
                echo "<td>" . $r[2] . "</td>";
                echo "<td>" . $r[3] . "</td>";
                echo "<td>" . $r[4] . "</td>";
                echo "<td><a href='db_remove_item.php?description=" . $r[0] . "'>Delete</a></td>";
                echo "</tr>";
            }
    echo "</table>";
    mysqli_close($conn);
    echo "<a href='add_item.html'>Add Item</a>";
    echo "<br><br>";
    echo "<a href='index.html'>Home Page</a>";
?>
</body>
</html>