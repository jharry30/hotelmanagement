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

<!-- Custom CSS for the content -->
<style>
.main-container {
    padding: 20px;
}

.filter-button {
    margin: 0 10px;
    padding: 10px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: lightblue; /* Light blue for inactive buttons */
}

.filter-button.active {
    background-color: #007BFF; /* Darker blue for active button */
    color: white; /* White text for contrast */
}

.cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.room-card {
    border: 1px solid #ccc;
    border-radius: 10px;
    width: 250px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    position: relative;
    background-color: white; /* Set card background to white */
}

.room-image {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

.room-info {
    margin-top: 10px;
    text-align: center; /* Centering the text */
}

/* Button styling */
.edit-button{
    color: white; /* White text color */
    border: none; /* Remove default border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px 15px; /* Padding for buttons */
    margin: 5px; /* Margin between buttons */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s; /* Smooth transition for background color */
}

/* Edit button specific styling */
.edit-button {
    background-color: #ffc107; /* Yellow background for edit button */
}

/* Button hover effects */
.edit-button:hover {
    background-color: #ffca2c; /* Darker yellow on hover */
}


/* Responsive styling */
@media (max-width: 768px) {
    .cards-container {
        flex-direction: column; /* Stack cards on smaller screens */
        align-items: center; /* Center align */
    }
}
</style>
<!-- End of Custom CSS for the content -->




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
                <span>ADMIN PANEL</span>
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

    <!-- Filter Buttons -->
    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
        <button class="filter-button" onclick="filterRooms('all')">All</button>
        <button class="filter-button" onclick="filterRooms('executive')">Executive</button>
        <button class="filter-button" onclick="filterRooms('superior')">Superior</button>
        <button class="filter-button" onclick="filterRooms('deluxe')">Deluxe</button>
        <button class="filter-button" onclick="filterRooms('standard')">Standard</button>
    </div>
    <!-- End Filter Buttons -->
</div>

  <!-- Cards for Rooms -->
  <div class="cards-container">
    <!-- Superior Family (Apartel) -->
    <div class="room-card" data-category="superior">
      <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img1.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Superior Family (Apartel)</h3>
        <p>₱5,500.00</p>
        <p>Good for 4 persons</p>
        <button class="edit-button" onclick="bookRoom('SUPERIOR_FAMILY')">Update</button>
      </div>
    </div>

    <!-- Executive Room -->
    <div class="room-card" data-category="executive">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img2.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Executive Room</h3>
        <p>₱4,550.00</p>
        <p>Good for 2 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Family Deluxe Room -->
    <div class="room-card" data-category="deluxe">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Family Deluxe Room</h3>
        <p>₱2,750.00</p>
        <p>Good for 4 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Suite Room (Superior Twin) -->
    <div class="room-card" data-category="deluxe">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img3.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Suite Room</h3>
        <p>₱3,650.00</p>
        <p>Good for 2 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Family Deluxe Room -->
    <div class="room-card" data-category="deluxe">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Family Deluxe Room</h3>
        <p>₱2,750.00</p>
        <p>Good for 4 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Standard Room -->
    <div class="room-card" data-category="standard">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img5.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Standard Room</h3>
        <p>₱2,200.00</p>
        <p>Good for 2 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Family Deluxe Room -->
    <div class="room-card" data-category="deluxe">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Family Deluxe Room</h3>
        <p>₱2,750.00</p>
        <p>Good for 4 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Superior Twin Room -->
    <div class="room-card" data-category="superior">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img5.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Superior Twin Room</h3>
        <p>₱3,000.00</p>
        <p>Good for 2 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Deluxe King Room -->
    <div class="room-card" data-category="deluxe">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Deluxe King Room</h3>
        <p>₱3,500.00</p>
        <p>Good for 2 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>

    <!-- Executive Family Room -->
    <div class="room-card" data-category="executive">
    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img3.jpg" alt="Superior Family (Apartel)" class="room-image">
      <div class="room-info">
        <h3>Executive Family Room</h3>
        <p>₱6,000.00</p>
        <p>Good for 5 persons</p>
        <button class="edit-button" onclick="bookRoom('EXECUTIVE')">Update</button>
      </div>
    </div>
  </div>
</main>


<script>
    function bookRoom(roomType) {
            // Logic for editing a room
            alert('Sorry! This button is still under development.');
        }

        function filterRooms(category) {
        const cards = document.querySelectorAll('.room-card');
        const buttons = document.querySelectorAll('.filter-button');

        // Show/hide cards based on the selected category
        cards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // Update button styles
        buttons.forEach(button => {
            if (button.innerText.toLowerCase() === category.toLowerCase()) {
                button.classList.add('active'); // Add active class to the selected button
            } else {
                button.classList.remove('active'); // Remove active class from other buttons
            }
        });
    }

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


</div>


</body>
</html>
