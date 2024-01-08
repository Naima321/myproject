<?php

// Connect to database
$db = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user is already registered
$sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$count = $stmt->fetchColumn();

// If user is already registered, show modal with "already registered" message
if ($count > 0) {
  echo '<script>$("#myModal").modal("show");</script>';
  echo '<script>$("#myModal .modal-body").html("You are already registered.");</script>';
} else {
  // Insert user into database
  $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->execute();

  // Show modal with welcome message
  echo '<script>$("#myModal").modal("show");</script>';
  echo '<script>$("#myModal .modal-body").html("Welcome to our website!");</script>';
}

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal Title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {

// Submit form
$('#myForm').submit(function(e) {

  // Prevent default form submission
  e.preventDefault();

  // Get form data
  var formData = $(this).serialize();

  // Send AJAX request
  $.ajax({
    type: 'POST',
    url: 'register.php',
    data: formData,
    success: function(response) {
      // Do something with the response
    }
  });

});

});
</script>
