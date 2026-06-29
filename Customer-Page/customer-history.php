<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNNY POINT - User Page</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* General Table Styles */
.table {
    width: 100%;
    margin: 20px 0;
    border-collapse: collapse;
    border-radius: 0.5rem;
    overflow: hidden; /* Ensures rounded corners */
}

/* Table Header Styles */
.table thead {
    background-color: #007bff; /* Bootstrap primary color */
    color: #fff;
    font-weight: bold;
}

.table thead th {
    padding: 10px;
    text-align: left;
}

/* Table Body Styles */
.table tbody tr {
    background-color: #f8f9fa; /* Light grey background */
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

.table tbody tr:hover {
    background-color: #e2e6ea; /* Darker grey on hover */
}

.table tbody td {
    padding: 10px;
    border-bottom: 1px solid #dee2e6; /* Light grey border for rows */
}

/* Action Button Styles */
.btn-danger {
    background-color: #dc3545; /* Bootstrap danger color */
    border: none;
    border-radius: 0.25rem; /* Slightly rounded corners */
    padding: 5px 10px; /* Padding for the button */
    transition: background-color 0.3s; /* Smooth transition */
}

.btn-danger:hover {
    background-color: #c82333; /* Darker shade on hover */
    cursor: pointer; /* Change cursor to pointer on hover */
}

/* Icon Styles */
.btn-danger i {
    color: white; /* Set icon color to white */
    margin-right: 5px; /* Spacing between icon and text */
}

/* Responsive Design */
@media (max-width: 768px) {
    .table {
        font-size: 14px; /* Smaller font size for mobile */
    }
}
    </style>
</head>
<body>
    <div class="burger">
        <i class="fas fa-bars" onclick="openSidebar()"></i>
    </div>

    <div class="sidebar">
        <div class="logo">
            <img src="http://localhost/Hotel%20Management%20System/Customer-Page/img/logo.jpg" alt="SUNNY POINT Logo">
            <span class="logo-label">SUNNY POINT</span>
        </div>
        <ul>
            <li><a href="customer-view-room.php"><i class="fas fa-calendar-alt"></i> Book Room</a></li>
            <li><a href="customer-view-profile.php"><i class="fas fa-user"></i> View Profile</a></li>
            <li><a href="customer-feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
            <li><a href="customer-history.php"><i class="fas fa-history"></i> History</a></li>
            <li><a href="#" onclick="confirmLogout(event); return false;" ><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
    <div class="main-container">
        <div class="main-title">
            <h3 class="font-weight-bold" style="margin: 0;">History</h3>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th>UID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                    <th>Description</th> <!-- New column for action taken -->
                    <th></th> <!-- Updated action column -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>2024-10-10</td>
                    <td>14:30</td>
                    <td>Booked a room</td>
                    <td>Room booked successfully</td> <!-- Action taken example -->
                    <td>
                        <button class="btn-danger">
                            <i class="fas fa-trash" style="color: white;"></i> <!-- FontAwesome icon -->
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>2024-10-11</td>
                    <td>09:15</td>
                    <td>Checked out</td>
                    <td>Room checked out successfully</td> <!-- Action taken example -->
                    <td>
                        <button class="btn-danger">
                            <i class="fas fa-trash" style="color: white;"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>2024-10-12</td>
                    <td>11:45</td>
                    <td>Modified booking</td>
                    <td>Booking details updated</td> <!-- Action taken example -->
                    <td>
                        <button class="btn-danger">
                            <i class="fas fa-trash" style="color: white;"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>2024-10-12</td>
                    <td>16:00</td>
                    <td>Cancelled booking</td>
                    <td>Booking cancelled successfully</td> <!-- Action taken example -->
                    <td>
                        <button class="btn-danger">
                            <i class="fas fa-trash" style="color: white;"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

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
</body>
</html>