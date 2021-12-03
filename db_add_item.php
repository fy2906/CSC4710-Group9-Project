<?php
include("data_layer.php");

if ($_POST) {
    if (isset($_POST['description']) && isset($_POST['dueDate']) && isset($_POST['category']) && isset($_POST['priority']) && isset($_POST['status'])) {
        $description = $_POST['description'];
        $dueDate = $_POST['dueDate'];
        $category = $_POST['category'];
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        db_add_item($description,$dueDate,$category,$priority,$status);
    }
} else {
    header("location:todo.php");
}
?>