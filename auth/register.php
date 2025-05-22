<?php include_once '../includes/header.php' ?>
      <!--Register-->

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


<?php include_once '../includes/footer.php' ?>