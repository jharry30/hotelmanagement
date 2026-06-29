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
        /* General styles */
        body {
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Main content styles */
        .main-content {
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
        }

        /* Title styles */
        .main-title {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .main-title h3 {
            font-size: 1.8rem;
            color: #2c3e50;
        }

        /* Feedback form styles */
        .feedback-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.8rem;
            /* Adjusted padding for better spacing */
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
            box-sizing: border-box;
            /* Ensure padding is included in width */
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border: 1px solid #3498db;
            outline: none;
        }

        /* Button styles */
        .submit-button {
            background-color: #3498db;
            color: white;
            padding: 0.8rem;
            /* Adjusted padding for better button size */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #2980b9;
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
            <li><a href="#" onclick="confirmLogout(event); return false;"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="main-container">
            <div class="main-title">
                <h3 class="font-weight-bold" style="margin: 0;">Feedback Form</h3>
                <p>Your feedback is valuable to us. Please fill out the form below.</p>
            </div>

            <!-- Feedback Form -->
            <form class="feedback-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Feedback:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-button">Submit Feedback</button>
                </div>
            </form>
            <!-- End Feedback Form -->
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