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
        .main-container {
            padding: 20px; /* Add padding to the main container */
        }
        
        .main-title {
            text-align: center; /* Center align title */
            margin-bottom: 20px; /* Space below the title */
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
            flex-wrap: wrap; /* Allow cards to wrap to the next line */
            justify-content: center; /* Center cards */
            gap: 20px; /* Space between cards */
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
        .book-button,
        .delete-button {
            color: white; /* White text color */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners */
            padding: 10px 15px; /* Padding for buttons */
            margin: 5px; /* Margin between buttons */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for background color */
        }

        /* Edit button specific styling */
        .book-button {
            background-color: #ffc107; /* Yellow background for edit button */
        }

        /* Delete button specific styling */
        .delete-button {
            background-color: #dc3545; /* Red background for delete button */
        }

        /* Button hover effects */
        .book-button:hover {
            background-color: #ffca2c; /* Darker yellow on hover */
        }

        .delete-button:hover {
            background-color: #c82333; /* Darker red on hover */
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
                <h3 class="font-weight-bold" style="margin: 0;"></h3> 

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
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Executive Room -->
                <div class="room-card" data-category="executive">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img2.jpg" alt="Executive Room" class="room-image">
                    <div class="room-info">
                        <h3>Executive Room</h3>
                        <p>₱4,550.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Family Deluxe Room -->
                <div class="room-card" data-category="deluxe">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img4.jpg" alt="Family Deluxe Room" class="room-image">
                    <div class="room-info">
                        <h3>Family Deluxe Room</h3>
                        <p>₱2,750.00</p>
                        <p>Good for 4 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Standard Room -->
                <div class="room-card" data-category="standard">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img5.jpg" alt="Standard Room" class="room-image">
                    <div class="room-info">
                        <h3>Standard Room</h3>
                        <p>₱2,200.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Suite Room (Superior Twin) -->
                <div class="room-card" data-category="deluxe">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img3.jpg" alt="Suite Room" class="room-image">
                    <div class="room-info">
                        <h3>Suite Room</h3>
                        <p>₱3,650.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Standard Room -->
                <div class="room-card" data-category="standard">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img5.jpg" alt="Standard Room" class="room-image">
                    <div class="room-info">
                        <h3>Standard Room</h3>
                        <p>₱2,200.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Executive Room -->
                <div class="room-card" data-category="executive">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img2.jpg" alt="Executive Room" class="room-image">
                    <div class="room-info">
                        <h3>Executive Room</h3>
                        <p>₱4,550.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Executive Family Room -->
                <div class="room-card" data-category="executive">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img3.jpg" alt="Executive Family Room" class="room-image">
                    <div class="room-info">
                        <h3>Executive Family Room</h3>
                        <p>₱6,000.00</p>
                        <p>Good for 5 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Executive Room -->
                <div class="room-card" data-category="executive">
                    <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img2.jpg" alt="Executive Room" class="room-image">
                    <div class="room-info">
                        <h3>Executive Room</h3>
                        <p>₱4,550.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>

                <!-- Standard Room -->
                <div class="room-card" data-category="standard">
                <img src="http://localhost/Hotel%20Management%20System/Admin-Page/img/img5.jpg" alt="Standard Room" class="room-image">
                    <div class="room-info">
                        <h3>Standard Room</h3>
                        <p>₱2,200.00</p>
                        <p>Good for 2 persons</p>
                        <button class="book-button" onclick="bookRoom('SUPERIOR_FAMILY')">Book now</button>
                    </div>
                </div>
            </div>
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