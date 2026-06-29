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

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Custom CSS for the table -->
  <style>
    /* Table styling */
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: 'Montserrat', sans-serif;
      color: #666666;
      box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
      background-color: #ffffff;
    }

    table thead {
      background-color: #666666;
      color: #ffffff;
      text-align: left;
    }

    table th, table td {
      padding: 12px 15px;
    }

    table tbody tr {
      border-bottom: 1px solid #d2d2d3;
    }

    table tbody tr:nth-child(even) {
      background-color: #f3f3f3;
    }

    table tbody td a {
      text-decoration: none;
      vertical-align: middle;
      color: #246dec;
    }

    table tbody td a:hover {
      color: #0c5f9b;
    }

    table tbody td a span {
      font-size: 18px;
      vertical-align: middle;
      margin-right: 8px;
    }

    /* Adjustments for main title */
    .main-title {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    /* Styling for sorting dropdown */
    #sortDropdown {
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      margin-right: 10px;
      width: 150px; /* Adjust width as needed */
    }

    /* CSS for custom icons and colors */
  .edit-icon {
    color: #28a745; /* Green color for edit icon */
  }

  .delete-icon {
    color: #dc3545; /* Red color for delete icon */
  }
  </style>
  <!-- End of Custom CSS for the table -->


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
    <p class="font-weight-bold" style="margin: 0;">LIST OF FEEDBACKS</p>

    <!-- Sorting Dropdown -->
    <div style="display: flex; align-items: center;">
      <select id="sortDropdown" onchange="sortTable()">
        <option value="default" <?php echo (!isset($_GET['sort']) || $_GET['sort'] == 'default') ? 'selected' : ''; ?>>Default</option>
        <option value="name" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'name') ? 'selected' : ''; ?>>Name</option>
        <option value="email" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'email') ? 'selected' : ''; ?>>Email</option>
        <option value="status" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'status') ? 'selected' : ''; ?>>Status</option>
      </select>
    </div>
    <!-- End Sorting Dropdown -->
  </div>

<!-- Feedback Table -->
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>UID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example Rows -->
        <tr>
            <td>1</td>
            <td>UID001</td>
            <td>John Doe</td>
            <td>john.doe@example.com</td>
            <td>Room Booking Inquiry</td>
            <td>I would like to inquire about room availability.</td>
            <td>Pending</td>
            <td>
                <a href="#" title="Edit" class="editInquiryBtn">
                    <span class="material-icons-outlined edit-icon">edit</span>
                </a>
                <a href="#" title="Delete" onclick="confirmDelete('UID001')">
                    <span class="material-icons-outlined delete-icon">delete</span>
                </a>
            </td>
        </tr>
        <tr>
          <td>2</td>
          <td>UID002</td>
          <td>Jane Smith</td>
          <td>jane.smith@example.com</td>
          <td>Inquiry</td> <!-- Updated from Feedback to Inquiry -->
          <td>Thank you for the wonderful service.</td> <!-- Updated message -->
          <td>Resolved</td>
          <td>
              <a href="#" title="Edit" class="editInquiryBtn">
                  <span class="material-icons-outlined edit-icon">edit</span>
              </a>
              <a href="#" title="Delete" onclick="confirmDelete('UID002')">
                  <span class="material-icons-outlined delete-icon">delete</span>
              </a>
          </td>
      </tr>
        </tr>
        <tr>
            <td>3</td>
            <td>UID003</td>
            <td>Michael Johnson</td>
            <td>michael.johnson@example.com</td>
            <td>Room Service Request</td>
            <td>Can I order room service at 11 PM?</td>
            <td>In Progress</td>
            <td>
                <a href="#" title="Edit" class="editInquiryBtn">
                    <span class="material-icons-outlined edit-icon">edit</span>
                </a>
                <a href="#" title="Delete" onclick="confirmDelete('UID003')">
                    <span class="material-icons-outlined delete-icon">delete</span>
                </a>
            </td>
        </tr>
    </tbody>
</table>
<!-- End Feedback Table -->


    <!-- Include the modal -->
    <?php include 'admin-feedback-view-modal.php'; ?>
</main>
<!-- End Main -->

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

    // Function to confirm delete using SweetAlert
    function confirmDelete(uid) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You will not be able to recover this customer's feedback",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {
        // If user confirms deletion, redirect to deletion script
        window.location.href = `staff-inquiry-delete-func.php?id=${uid}`;
      }
    });
    
    // Prevent default anchor behavior
    return false;
  }
</script>


</div>

<!-- Scripts -->
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



</body>
</html>
