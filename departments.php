<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>
<div class="head">
    <a id="home" href="index.php">Home</a>
    <a id="departm" href="departments.php">Departments</a>
    <a id="login" href="login.php">Login</a>
</div>

<div class="dep">
<a id="acc" href="accounting.php">Accounting</a>
   <a id="hr" href="hr.php">Human Resources</a>
   <a id ="it" href="it.php">Information technologies</a>
   <a id="procur" href="procurement.php">Procurement</a>

</div>



