<?php include __DIR__ . '/../functions.php'; ?>    
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




 <!--Login-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">GET LOGIN </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" novalidat enctype="multipart/form-data">
            <h4 class="text-center"> Login Here</h4>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control"  name="Lemail" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
            <label for="address" class="form-label">Password</label>
            <input type="password" class="form-control"  name="Lpassword" placeholder="Enter your Password" required>
            </div>
            <div class="modal-footer text-center"  style="text-align:center;">
            <input type="submit" name="Login" class="btn btn-primary text-center" value="Register">
            <br>
            <a href="../MyConcert/auth/register.php">SignUp</a>
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


