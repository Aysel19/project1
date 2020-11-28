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

<h2 id="accou">Accounting</h2>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Current educational degree</th>
    <th >Job spesification</th>
  </tr>
  <tr>
    <td>Nigar</td>
    <td>Hasanzada</td>
    <td>22</td>
    <td>Master of Accounting</td>
    <td>Intern</td>

  </tr>
  <tr>
    <td>Ulker</td>
    <td>Guluzade</td>
    <td>22</td>
    <td>Master of Finance</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Aygun</td>
    <td>Rasulova</td>
    <td>19</td>
    <td>Bachelor of Finance</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Eljan</td>
    <td>Durmushov</td>
    <td>19</td>
    <td>Bachelor of Business management</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Nijat</td>
    <td>Mammadov</td>
    <td>18</td>
    <td>Bachelor of Economics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Zahra</td>
    <td>Sadigova</td>
    <td>20</td>
    <td>Bachelor of Finance</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Naida</td>
    <td>Sadigova</td>
    <td>19</td>
    <td>Bachelor of Finance and Accounting</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Javad</td>
    <td>Mustafayev</td>
    <td>19</td>
    <td>Bachelor of Organization and management of Industry</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Samir</td>
    <td>Azizli</td>
    <td>21</td>
    <td>Bachelor of World economics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Fidan</td>
    <td>Jafarli</td>
    <td>21</td>
    <td>Bachelor of Finance</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Tazagul</td>
    <td>Khanaliyeva</td>
    <td>20</td>
    <td>Bachelor of Finance</td>
    <td>Intern</td>
  </tr>
</table>





<?php
include "footer.php";
?>
