<?php
require_once('../class.php');
$sessionData = $payroll->getSessionSecretaryData();
$payroll->verifyUserAccess($sessionData['access'], $sessionData['fullname'],2);
$fullname = $sessionData['fullname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Report</title>
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
                        <li class="li__records">
                            <a href="../SecretaryPortal/secdashboard.php">Attendance</a>
                         </li>
                        <li class="li__user">
                            <a href="../SecretaryPortal/employeelist.php">Employees</a>
                            <ul>
                                <li><a href="../SecretaryPortal/empschedule.php">Schedule</a></li>
                                <li><a href="../SecretaryPortal/deductions.php">Deductions</a></li>
                                <li><a href="../SecretaryPortal/violations.php">Violations</a></li>
                            </ul>
                        </li>
    
                        <li class="li__report">
                            <a href="#">Payroll</a>
                            <ul>
                                <li><a href="../SecretaryPortal/manualpayroll.php">Manual</a></li>
                                <li><a href="../SecretaryPortal/automaticpayroll.php">Automatic</a></li>
                            </ul>
                        </li>

                        <li class="li__report active">
                            <a href="#" class="active">Salary</a>
                            <ul>
                                <li><a href="../SecretaryPortal/releasedsalary.php">Released Salary</a></li>
                                <li><a href="../SecretaryPortal/salaryreport.php" class="active">Salary Report</a></li>
                                <li><a href="../SecretaryPortal/contributions.php">Contributions</a></li>
                            </ul>
                         </li>
                    </ul>
                </nav>
                <div class="sidebar__logout">
                    <div class="li li__logout"><a href="../logout.php">LOGOUT</a></div>
                </div>
            </div>

          <div class="page-info-head">
               Salary Report
          </div>

        <div class="user-info">
                <a href="editsec.php">[ Edit Account ]</a>
                <p><?php echo $fullname; ?></p>
            <div class="user-profile">
            </div>
        </div>

          <div class="employee_list">
              <div class="employee_list__header">
                <h1>List of Salary Report</h1>
                  <form method="post">
                        <button type="submit" name="empsearch">Search</button>
                        <input type="search" name="employeesearch" placeholder="Search">
                  </form>
              </div>


              <div class="employee_list__content">
                  <table>
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>January</th>
                                <th>February</th>
                                <th>April</th>
                                <th>May</th>
                                <th>June</th>
                                <th>July</th>
                                <th>August</th>
                                <th>September</th>
                                <th>October</th>
                                <th>November</th>
                                <th>December</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $payroll->salaryreport(); ?>
                        </tbody>
                  </table>
              </div>
          </div>
    </div>
</body>
</html>