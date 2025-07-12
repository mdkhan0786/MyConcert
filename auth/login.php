<?php 
include __DIR__ . '/../includes/header.php'; 


?>

<div class="modal-body">

    <form method="POST" novalidat enctype="multipart/form-data">
        <h4 class="text-center"> Login Here</h4>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control"  name="Lemail" placeholder="Enter your User or email" required>
        </div>

        <div class="mb-3">
        <label for="address" class="form-label">Password</label>
        <input type="password" class="form-control"  name="Lpassword" placeholder="Enter your Password" required>
        </div>
        <div class="modal-footer text-center"  style="text-align:center;">
        <input type="submit" name="Login" class="btn btn-primary text-center" value="Register">
        </div>
    </form>
</div>


<?php include __DIR__ . '/../includes/footer.php';  ?>