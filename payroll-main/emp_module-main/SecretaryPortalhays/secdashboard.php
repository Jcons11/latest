<?php
require_once('../class.php');
$sessionData = $payroll->getSessionSecretaryData();
$payroll->verifyUserAccess($sessionData['access'], $sessionData['fullname']);
$fullname = $sessionData['fullname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Monitoring</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
     <div class="main-container">
          <div class="sidebar">
               <div class="sidebar__logo">
                    <div class="logo"></div>
                    <h3>JDTV</h3>
               </div>

               <nav>
                    <ul>
                        <li class="li__records active">
                            <a href="#" class="active">Attendance</a>
                         </li>
                        <li class="li__user">
                            <a href="#">Employees</a>
                            <ul>
                                <li><a href="#">List of Employees</a></li>
                                <li><a href="#">Schedule</a></li>
                                <li><a href="#">Deductions</a></li>
                                <li><a href="#">Violations</a></li>
                            </ul>
                        </li>
    
                        <li class="li__report">
                            <a href="">Payroll</a>
                            <ul>
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Automatic</a></li>
                            </ul>
                        </li>

                        <li class="li__report">
                            <a href="">Salary</a>
                            <ul>
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Automatic</a></li>
                            </ul>
                         </li>
                    </ul>
                </nav>
                <div class="sidebar__logout">
                    <div class="li li__logout"><a href="#">LOGOUT</a></div>
                </div>
          </div>

          <!--END OF SIDE NAV-->

          <div class="page-info-head">
               Attendance Monitoring
          </div>

          <div class="user-info">
               <p>Profile Name</p>
               <div class="user-profile">
               </div>
          </div>

          <div class="attendance_monitoring">
               <div class="attendance_monitoring__header">
                    <button>
                         <a href="#">
                              Search
                         </a>
                    </button>

                    <input type="search" placeholder="Search">
               </div>
          
               <div class="card">
                    <div class="card__content">
                         <table>
                              <thead>
                                   <tr>
                                        <th>Employee ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Company</th>
                                        <th>Time-In</th>
                                        <th>Date</th>
                                        <th>Time-Out</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                   </tr>
                              </thead>

                              <tbody>
                              <?php 
                                    if(isset($_POST['print'])){

                                    } 
                                    else if(isset($_POST['bsearch']))
                                    {
                                        $payroll->search();
                                    }
                                    else 
                                    {
                                        $payroll->displayAttendance(); 
                                    }
                                ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>
