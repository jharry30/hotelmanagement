<div id="editInquiryModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 style="text-align: center;">Customer's Feedback</h2>
    <form action="staff-inquiry-edit-modal.php" method="post">
      <input type="hidden" id="uid" name="uid">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required readonly>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required readonly>
      </div>
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required readonly>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required readonly></textarea>
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <select id="status" name="status" required>
          <option value="" disabled>Select Status</option>
          <option value="Pending">Pending</option>
          <option value="Resolved">Resolved</option>
          <option value="In Progress">In Progress</option>
          <option value="Closed">Closed</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" class="submit-btn">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<style>
/* Modal styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: white;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 500px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  animation: fadeIn 0.3s;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
}

h2 {
  font-family: 'Montserrat', sans-serif;
  color: #333;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  color: #333;
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea,
select {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  font-family: 'Montserrat', sans-serif;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus,
select:focus {
  border-color: #007bff;
  outline: none;
}

textarea {
  height: 100px;
  resize: none;
}

.submit-btn {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #0056b3;
}
</style>

<script>
// Function to open and populate the modal
function openEditModal(row) {
  var uid = row.getAttribute('data-uid');
  var name = row.getAttribute('data-name');
  var email = row.getAttribute('data-email');
  var subject = row.getAttribute('data-subject');
  var message = row.getAttribute('data-message');
  var status = row.getAttribute('data-status');

  // Populate the modal fields
  document.getElementById('uid').value = uid;
  document.getElementById('name').value = name;
  document.getElementById('email').value = email;
  document.getElementById('subject').value = subject;
  document.getElementById('message').value = message;
  document.getElementById('status').value = status;

  // Display the modal
  var modal = document.getElementById("editInquiryModal");
  modal.style.display = "flex";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  var modal = document.getElementById("editInquiryModal");
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById("editInquiryModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Attach event listeners to all edit buttons
document.querySelectorAll('.editInquiryBtn').forEach(function(button) {
  button.addEventListener('click', function(event) {
    event.preventDefault();
    var row = this.closest('tr'); // Get the row associated with the button
    openEditModal(row);
  });
});
</script>