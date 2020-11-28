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

<h2 id="accou">Procurement</h2>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Current educational degree</th>
    <th>Job spesification</th>
  </tr>
  <tr>
    <td>Elmar</td>
    <td>Khalilov</td>
    <td>20</td>
    <td>Bachelor of Business</td>
    <td>Intern</td>

  </tr>
  <tr>
    <td>Aida</td>
    <td>Iskandarli</td>
    <td>19</td>
    <td>Bachelor of Business management</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Yusif</td>
    <td>Abbasov</td>
    <td>21</td>
    <td>Bachelor of Economics</td>
    <td>Intern</td>
  </tr>
</table>




<?php
include "footer.php";
?>
