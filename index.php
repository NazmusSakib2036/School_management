<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: pages/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="indx_sty/ind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <nav class="navbar" id="navbar">
        <div class="name_varsity">
            <a href="">Northern University Bangladesh</a>
            <a href="">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-x"></i>
            </a>
        </div>
        <a href="">
            <i class="fa-solid fa-user"></i>
        </a>
    </nav>










    <div class="all_property">

        <div class="sidebar">

            <div class="account">
                <div class="profile_user">
                    <img src="img/account-64.png" alt="Avatar">
                    <div class="name_designation">
                        <p class="ac_name">Nazmus Sakib</p>
                        <p class="designation">Student</p>
                    </div>
                </div>
            </div>



            <div class="slider_section">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-book-bookmark"></i> &nbsp;&nbsp;Allocate Fees</a></li>
                    <li><a href="#"><i class="fa-solid fa-money-check-dollar"></i> &nbsp;&nbsp;Fee Payment</a></li>
                    <li><a href="#"><i class="fa-solid fa-eye"></i> &nbsp;&nbsp;Outstanding Bills</a></li>
                    <li><a href="#"><i class="fa-solid fa-print"></i> &nbsp;&nbsp;Manage Expenses</a></li>
                    <li><a href="#"><i class="fa-solid fa-explosion"></i> &nbsp;&nbsp;Manage Debtors</a></li>
                    <li><a href="#"><i class="fa-solid fa-boxes-stacked"></i> &nbsp;&nbsp;Manage Inventory</a></li>
                    <li><a href="#"><i class="fa-solid fa-user-group"></i> &nbsp;&nbsp;Staff Payroll</a></li>
                    <li><a href="#"><i class="fa-solid fa-bell"></i> &nbsp;&nbsp;Notifications</a></li>
                    <li><a href="#"><i class="fa-solid fa-cog"></i> &nbsp;&nbsp;Settings</a></li>
                    <li><a href="#"><i class="fa-solid fa-lock"></i> &nbsp;&nbsp;Password Reset</a></li>
                </ul>
            </div>


        </div>







        <main class="main_content" id="main_content">

            <div class="header_ds">
                <div class="header_ds1">
                    <p class="varsity"><i class="fa-solid fa-graduation-cap"></i> Northern University Bangladesh</p>
                    <p class="session">First Team -
                        2024/2025 Seation</p>
                </div>
                <div class="header_ds2">
                    <p><i class="fa-solid fa-house"></i></p>
                    <p>/&nbsp;&nbsp;Dashboard</p>
                </div>
            </div>



            <div class="content">
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/my_profile.png" alt="Sakib" class="card-image">
                        <p class="card-title">My Profile</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="pages/reg.php" class="card">
                        <img src="img/student-registration-100.png" alt="Sakib" class="card-image">
                        <p class="card-title">Student Access</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/expensive-64.png" alt="Sakib" class="card-image">
                        <p class="card-title">Fee Allocation</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/payment-64.png" alt="Sakib" class="card-image">
                        <p class="card-title">Fee Payment</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Outstanding Bills.png" alt="Sakib" class="card-image">
                        <p class="card-title">Outstanding Bills</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Manage Expenses.png" alt="Sakib" class="card-image">
                        <p class="card-title">Manage Expenses</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Manage Debtors.png" alt="Sakib" class="card-image">
                        <p class="card-title">Manage Debtors</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Manage Inventory.png" alt="Sakib" class="card-image">
                        <p class="card-title">Manage Inventory</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Staff Payroll.png" alt="Sakib" class="card-image">
                        <p class="card-title">Staff Payroll</p>
                    </a>
                </div>
                <div class="all_box">
                    <a href="#" class="card">
                        <img src="img/Reset Password.png" alt="Sakib" class="card-image">
                        <p class="card-title">Reset Password</p>
                    </a>
                </div>


            </div>

    </div>
    </main>



    </div>





<!-- <a href="logout.php">Logout</a> -->





</body>
<script src="indx_sty/ind.js"></script>

</html>