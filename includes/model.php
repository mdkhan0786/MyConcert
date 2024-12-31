<?php include('config/function.php');?>
<?php include('config/config.php'); ?>



<?php
if(isset($_POST['update'])){
  $editName = $_POST['name'];
  $editEmail = $_POST['email'];
  $editContact = $_POST['contact'];
  $editadress = $_POST['address'];
}
?>
    <style>
        .modal-content {
            border-radius: 10px;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .modal-footer {
            border-radius: 0 0 10px 10px;
        }
        .form-label {
            font-weight: 600;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .invalid-feedback {
            font-size: 0.875rem;
            color: #dc3545;
        }
        .file-input-container {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
        }
        .file-input-container input {
            padding: 5px;
        }
    </style>



<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Fill the Booking Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form inside modal -->
        <form id="bookingForm" method="POST" novalidat enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            <div class="invalid-feedback">
              Please enter your name.
            </div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            <div class="invalid-feedback">
              Please enter a valid email address.
            </div>
          </div>

          <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
            <div class="invalid-feedback">
              Please enter your contact number.
            </div>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">Current Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
            <div class="invalid-feedback">
              Please enter your current address.
            </div>
          </div>

          <div class="mb-3">
            <label for="idCard" class="form-label">Attached ID Card</label><br>
            <div class="file-input-container">
              <input type="file" class="form-control" name="file" id="idCard" required>
            </div>
            <div class="invalid-feedback">
              Please attach your ID card.
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary text-left">Submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



      <!--***Edit Model-->
      <?php 
      @$email =$_SESSION['user_email'];
      $Log_userId = "SELECT * FROM users where Email = '$email' ";
      $result = $conn->query($Log_userId);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $Name = $row['Name'];
             $Email = $row['Email'];
             $Contact = $row['Contact'];
             $Address = $row['Address'];
        }
    } 
          ?>

    <div class="modal fade" id="EditModel" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Update Your Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <!-- Form inside modal -->
            <form id="bookingForm" method="POST" novalidat enctype="multipart/form-data">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?php echo $Name ;?>" required >
                <div class="invalid-feedback">
                  Please enter your name.
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo $Email ;?>" required>
                <div class="invalid-feedback">
                  Please enter a valid email address.
                </div>
              </div>

              <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" value="<?php echo $Contact; ?>" required>
                <div class="invalid-feedback">
                  Please enter your contact number.
                </div>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Current Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" value="<?php echo $Address?>" required>
                <div class="invalid-feedback">
                  Please enter your current address.
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" id="EditID" name="hiddenId">
                <button type="button" name="update" id="update" class="btn btn-primary text-left">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
         




<!-- jQuery CDN (latest version) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // JavaScript validation
  const form = document.getElementById('bookingForm');

  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault(); // Prevent form submission
      event.stopPropagation(); // Stop further event propagation
    }
    form.classList.add('was-validated');
  });

  jQuery(document).ready(function() {
    // When the Edit button is clicked
    jQuery("#update").click(function() {
        alert("update Function are In-Progress");
    });

    
});

</script>


