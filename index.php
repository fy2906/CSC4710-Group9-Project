<!DOCTYPE HTML>  
<html>
<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<?php
// define variables and set to empty values
$taskErr = $duedateErr = "";
$task = $duedate = $priority = $category = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["task"])) {
    $taskErr = "Task is required";
  } else {
    $task = test_input($_POST["task"]);
  }
  
  if (empty($_POST["duedate"])) {
    $duedateErr = "due date is required";
  } else {
    $duedate = test_input($_POST["duedate"]);
    // do we need to check if date is right format??
  }
    
  if (empty($_POST["priority"])) {
    $priority = "";
  } else {
    $priority = test_input($_POST["priority"]);
  }

  if (empty($_POST["category"])) {
    $priority = "";
  } else {
    $priority = test_input($_POST["category"]);
  }

  if (empty($_POST["status"])) {
    $priority = "";
  } else {
    $priority = test_input($_POST["status"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="main-section">
  <h2>Todo List</h2>
  <div class="add-todo-section">


  
  <form class="create-area" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p><span class="error">* required field</span></p>  
    Task: <input type="text" name="task" value="<?php echo $task;?>">
    <span class="error">* <?php echo $taskErr;?></span>
    <br><br>

    Due date(y/m/d): <input type="text" name="duedate" value="<?php echo $duedate;?>">
    <span class="error">* <?php echo $duedateErr;?></span>
    <br><br>

    Category: 
    <input type="text" name="category" value="<?php echo $category;?>">
    <br><br>

    Priority:
    <input type="radio" name="priority" <?php if (isset($priority) && $priority=="1") echo "checked";?> value="1">1
    <input type="radio" name="priority" <?php if (isset($priority) && $priority=="2") echo "checked";?> value="2">2
    <input type="radio" name="priority" <?php if (isset($priority) && $priority=="3") echo "checked";?> value="3">3
    <input type="radio" name="priority" <?php if (isset($priority) && $priority=="4") echo "checked";?> value="4">4   
    <br><br>

    Status:
    <input type="radio" name="status" <?php if (isset($status) && $status=="active") echo "checked";?> value="active">active
    <input type="radio" name="status" <?php if (isset($status) && $status=="completed") echo "checked";?> value="completed">completed
    <br><br>

    <input type="submit" name="submit" value="Submit">  
  </form>
  </div>

  <div class="show-todo-section">

  </div>
</div>

<div class="about-author">
  <A id="about-author" HREF="author.html">About Authors</A>
</div>


<!-- <?php
echo "<h2>Your Input:</h2>";
echo $task;
echo "<br>";
echo $duedate;
echo "<br>";
echo $category;
echo "<br>";
echo $priority;
echo "<br>";
echo $status;
?> -->
</body>


</html>