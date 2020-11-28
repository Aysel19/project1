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

<h2 id="accou">Information technologies</h2>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Current educational degree</th>
    <th>Job spesification</th>
  </tr>
  <tr>
    <td>Oruj</td>
    <td>Ismayilov</td>
    <td>21</td>
    <td>Master of Economics</td>
    <td>Intern</td>

  </tr>
  <tr>
    <td>Aydan</td>
    <td>Atakishiyeva</td>
    <td>20</td>
    <td>Bachelor of IT</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Eldar</td>
    <td>Karimov</td>
    <td>19</td>
    <td>Bachelor of Computer sciences</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Aysel</td>
    <td>Abbasova</td>
    <td>21</td>
    <td>Bachelor of IT</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Inji</td>
    <td>Mammadzada</td>
    <td>20</td>
    <td>Bachelor of Mathematics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Raghib</td>
    <td>Iskandarli</td>
    <td>19</td>
    <td>Bachelor of İT and management</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Uvliyya</td>
    <td>Dadashova</td>
    <td>22</td>
    <td>Bachelor of Statistics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Aynur</td>
    <td>Eyyubova</td>
    <td>24</td>
    <td>NO INFO</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Erkhin</td>
    <td>Qarayev</td>
    <td>23</td>
    <td>Master of Business and data analytics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Orkhan</td>
    <td>Tahirov</td>
    <td>21</td>
    <td>Bachelor of Cumputer sciences</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Konul</td>
    <td>Aliyeva</td>
    <td>21</td>
    <td>Bachelor of Computer engineering</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Elvin</td>
    <td>Aghalarov</td>
    <td>21</td>
    <td>Bachelor of Chemistry engineering</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Sakina</td>
    <td>Quliyeva</td>
    <td>22</td>
    <td>Bachelor of IT</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Gunay</td>
    <td>Maharramli</td>
    <td>21</td>
    <td>Bachelor of Computer engineering</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Narmin</td>
    <td>Rustamova</td>
    <td>22</td>
    <td>Master of Computer Sciences</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Elvin</td>
    <td>Qurbanov</td>
    <td>20</td>
    <td>Bachelor of IT</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Tarlan</td>
    <td>Huseynova</td>
    <td>27</td>
    <td>Master of Computer engineering</td>
    <td>Intern</td>
  </tr>
</table>





<?php
include "footer.php";
?>
