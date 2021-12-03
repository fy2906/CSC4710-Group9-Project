<?php
include("data_layer.php");

if ($_GET) {
    if (isset($_GET['description'])) {
        $description=$_GET['description'];
        db_remove_item($description);
    }
} else {
    header("location:todo.php");
}

?>