<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY POINT - Admin Panel</title>
    
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<div class="grid-container">
    <!-- Header -->
    <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
            <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
        </div>
        <div class="header-right">
            <span class="material-icons-outlined">notifications</span>
            <span class="notification-counter"></span>
            <div id="notificationDropdown" class="dropdown-content">
                <!-- Notifications will be dynamically added here -->
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Sidebar -->
    <aside id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-brand">
                <span class="material-icons-outlined"></span> ADMIN PANEL
            </div>
            <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="admin-dashboard.php">
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="admin-manage-room.php">
                    <span class="material-icons-outlined">room_service</span> Manage Rooms
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="admin-manage-appointment.php"> 
                    <span class="material-icons-outlined">calendar_today</span> Manage Appointments
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="admin-customer-record.php">
                    <span class="material-icons-outlined">person</span> Customer Records
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="admin-feedback.php">
                    <span class="material-icons-outlined">feedback</span> Feedback
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="admin-sales.php">
                    <span class="material-icons-outlined">shopping_cart</span> Sales
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" onclick="confirmLogout(event); return false;">
                    <span class="material-icons-outlined">logout</span> Logout
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main -->
    <main class="main-container">
        <div class="main-title">
            <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">
            <!-- Room Reservations -->
            <div class="card">
                <div class="card-inner">
                    <h3>ROOM AVAILABILITY</h3>
                    <span class="material-icons-outlined">bed</span>
                </div>
                <h1>
                    <?php
                    // Generate a random count for room reservations
                    $roomCount = rand(0, 100); // Change the range as needed
                    echo $roomCount;
                    ?>
                </h1>
            </div>
            <!-- Manage Appointments -->
            <div class="card">
                <div class="card-inner">
                    <h3>ROOM RESERVATIONS</h3>
                    <span class="material-icons-outlined">calendar_today</span>
                </div>
                <h1>
                    <?php
                    // Generate a random count for barber appointments
                    $appointmentCount = rand(0, 100); // Change the range as needed
                    echo $appointmentCount;
                    ?>
                </h1>
            </div>
            <!-- Orders -->
            <div class="card">
                <div class="card-inner">
                    <h3>SALES ORDERS</h3>
                    <span class="material-icons-outlined">shopping_cart</span>
                </div>
                <h1>
                    <?php
                    // Generate a random count for sales orders
                    $orderCount = rand(0, 100); // Change the range as needed
                    echo $orderCount;
                    ?>
                </h1>
            </div>

            <!-- Guest Inquiries -->
            <div class="card">
                <div class="card-inner">
                    <h3>GUEST INQUIRIES</h3>
                    <span class="material-icons-outlined">question_answer</span>
                </div>
                <h1>
                    <?php
                    // Generate a random count for guest inquiries
                    $inquiryCount = rand(0, 100); // Change the range as needed
                    echo $inquiryCount;
                    ?>
                </h1>
            </div>
        </div>
    </main>
    <!-- End Main -->
</div>
</body>
</html>

<script>
        function confirmLogout(event) {
        event.preventDefault(); // Prevent default action of the <a> tag

        Swal.fire({
            title: 'Are you sure you want to logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            confirmButtonColor: '#d33', // Reddish color
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../Authentication/staff-log-off.php"; // Redirect to logout page
            }
        });
    }
</script>
