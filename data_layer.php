<?php

function db_get_todo_data() {
	$servername ="localhost";
    $username ="id17781984_admin";
    $password = "<?g+im]YWvi/vs43";
    $database="id17781984_todo";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $query = "SELECT description,dueDate,category,priority,status FROM tbl_todo;";
    $result = mysqli_query($conn,$query);
    $relation = array();
    while ($row = mysqli_fetch_row($result)) {
        $temp = array();
        array_push($temp,$row[0],$row[1],$row[2],$row[3],$row[4]);
        array_push($relation,$temp);
    }
    mysqli_close($conn);
    return $relation;
}

function db_add_item($description,$dueDate,$category,$priority,$status) {
    $servername ="localhost";
    $username ="id17781984_admin";
    $password = "<?g+im]YWvi/vs43";
    $database="id17781984_todo";    

    $conn = mysqli_connect($servername,$username,$password,$database);
    $stmt = mysqli_prepare($conn,"INSERT INTO tbl_todo (description,dueDate,category,priority,status) VALUES (?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,"sssis",$description,$dueDate,$category,$priority,$status);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    header("location:todo.php");
}

function db_remove_item($description) {
    $servername ="localhost";
    $username ="id17781984_admin";
    $password = "<?g+im]YWvi/vs43";
    $database="id17781984_todo";   
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    $stmt = mysqli_prepare($conn,"DELETE FROM tbl_todo WHERE description=?");
    mysqli_stmt_bind_param($stmt,"s",$description);
    mysqli_stmt_execute($stmt);
    mysqli_close($conn);
    header("location:todo.php");
}

?>