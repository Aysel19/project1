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

<h2 id="accou">Human resuorces</h2>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Current educational degree</th>
    <th>Job spesification</th>
  </tr>
  <tr>
    <td>Zahra</td>
    <td>Valizada</td>
    <td>18</td>
    <td>Bachelor of Geophysics engineering</td>
    <td>Intern</td>

  </tr>
  <tr>
    <td>Ibrahimov</td>
    <td>Natiq</td>
    <td>19</td>
    <td>Bachelor of Industry engineering</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Bahar</td>
    <td>Agayeva</td>
    <td>21</td>
    <td>Master of History</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Nazrin</td>
    <td>Bakhisli</td>
    <td>21</td>
    <td>Bachelor of Management</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Aysel</td>
    <td>Alizada</td>
    <td>21</td>
    <td>Bachelor of State and public relations</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Aftab</td>
    <td>Kalantarli</td>
    <td>19</td>
    <td>Bachelor of İnternational relations</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Minaya</td>
    <td>Huseynova</td>
    <td>21</td>
    <td>Bachelor of Geophysics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Govhar</td>
    <td>Aghayeva</td>
    <td>25</td>
    <td>Bachelor of Organization and management of Industry</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Gulchin</td>
    <td>Huseynova</td>
    <td>20</td>
    <td>Bachelor of Finance and Accounting</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Nilgun</td>
    <td>Shahingizi</td>
    <td>20</td>
    <td>Bachelor of State and public relations</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Gunay</td>
    <td>Almazova</td>
    <td>23</td>
    <td>Bachelor of Organization and management of Industry</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Nigar</td>
    <td>Abdullayeva</td>
    <td>21</td>
    <td>Bachelor of Chemistry engineering</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Hamida</td>
    <td>Azizova</td>
    <td>21</td>
    <td>Master of Sosiology</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Banzar</td>
    <td>Aliyeva</td>
    <td>20</td>
    <td>Bachelor of Business management</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Tamerlan</td>
    <td>Hasanov</td>
    <td>23</td>
    <td>Master of International relations</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Fidan</td>
    <td>Ismayilova</td>
    <td>20</td>
    <td>Bachelor of Translation</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Asmar</td>
    <td>Haziyeva</td>
    <td>21</td>
    <td>Bachelor of Economics</td>
    <td>Intern</td>
  </tr>
  <tr>
    <td>Afsana</td>
    <td>Abbaszada</td>
    <td>21</td>
    <td>Bachelor of State and Public relations</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Fidan</td>
    <td>Sadigova</td>
    <td>20</td>
    <td>Bachelor of Economics</td>
    <td>Intern</td>
  </tr> 
  <tr>
    <td>Tarlan</td>
    <td>Osmanli</td>
    <td>22</td>
    <td>Master of Statistics of Firm</td>
    <td>Intern</td>
  </tr> 
</table>





<?php
include "footer.php";
?>
