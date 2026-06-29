<div id="editSalesModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="text-align: center;">Customer's Appointment</h2>
        <form action="admin-sales-view-modal.php" method="post">
            <div class="form-grid">
                <!-- Transaction ID and Customer ID in two columns -->
                <div class="form-group">
                    <label for="transaction_id">Transaction ID:</label>
                    <input type="text" id="transaction_id" name="transaction_id" readonly>
                </div>
                <div class="form-group">
                    <label for="customer_id">Customer ID:</label>
                    <input type="text" id="customer_id" name="customer_id" readonly>
                </div>
                
                <!-- The rest of the fields in a single column -->
                <div class="form-group full-width">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="contact">Contact:</label>
                    <input type="text" id="contact" name="contact" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="room">Room:</label>
                    <input type="text" id="room" name="room" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="num_people">No. of People:</label>
                    <input type="number" id="num_people" name="num_people" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="amount">Amount:</label>
                    <input type="text" id="amount" name="amount" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="checkin_date">Check-in Date:</label>
                    <input type="text" id="checkin_date" name="checkin_date" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="checkout_date">Check-out Date:</label>
                    <input type="text" id="checkout_date" name="checkout_date" readonly>
                </div>
                <div class="form-group full-width">
                    <label for="remarks">Remarks:</label>
                    <select id="remarks" name="remarks" required>
                        <option value="" disabled>Select Remarks</option>
                        <option value="Pending">Pending</option>
                        <option value="Paid">Paid</option>
                        <option value="Cancelled">Cancelled</option>
                        <option value="Refunded">Refunded</option>
                    </select>
                </div>
            </div>
            <div class="form-group full-width">
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
  max-width: 600px;
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

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Two columns for Transaction ID and Customer ID */
  gap: 15px;
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
input[type="number"],
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
input[type="number"]:focus,
textarea:focus,
select:focus {
  border-color: #007bff;
  outline: none;
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
  transition: background-color 0.3s;
}

.submit-btn:hover {
  background-color: #0056b3;
}

.full-width {
  grid-column: span 2; /* Ensure full-width fields span across both columns */
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('editSalesModal');
    const editButtons = document.querySelectorAll('.editInquiryBtn');
    const closeBtn = modal.querySelector('.close');

    editButtons.forEach(btn => {
        btn.addEventListener('click', event => {
            event.preventDefault();
            const row = btn.closest('tr');

            // Get data from the row
            const transactionId = row.getAttribute('data-transaction-id');
            const customerId = row.getAttribute('data-customer-id');
            const fullName = row.getAttribute('data-full-name');
            const contact = row.getAttribute('data-contact');
            const category = row.getAttribute('data-category');
            const room = row.getAttribute('data-room');
            const numPeople = row.getAttribute('data-num-people');
            const amount = row.getAttribute('data-amount');
            const checkinDate = row.getAttribute('data-checkin-date');
            const checkoutDate = row.getAttribute('data-checkout-date');
            const remarks = row.getAttribute('data-remarks');

            // Populate modal fields
            document.getElementById('transaction_id').value = transactionId;
            document.getElementById('customer_id').value = customerId;
            document.getElementById('full_name').value = fullName;
            document.getElementById('contact').value = contact;
            document.getElementById('category').value = category;
            document.getElementById('room').value = room;
            document.getElementById('num_people').value = numPeople;
            document.getElementById('amount').value = amount;
            document.getElementById('checkin_date').value = checkinDate;
            document.getElementById('checkout_date').value = checkoutDate;
            document.getElementById('remarks').value = remarks;

            // Show modal
            modal.style.display = 'block';
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', event => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
</script>
