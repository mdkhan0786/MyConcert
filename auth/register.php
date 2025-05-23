<?php 
include __DIR__ . '/../includes/header.php'; 
include __DIR__ . '/../functions.php'; 

if (isset($_SESSION['registerMessage'])) {
    $message = $_SESSION['registerMessage'];
    unset($_SESSION['registerMessage']);
?>
    <!-- Display the message -->
    <p><?php echo htmlspecialchars($message); ?></p>

    <!-- jQuery redirect after 3 seconds -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                window.location.href = "/index.php"; // adjust path if needed
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>
<?php
}
?>


<div class="modal-body">

    <form method="POST" novalidat enctype="multipart/form-data">
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    
        </div>

        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control"  name="email" placeholder="Enter your email" required>
    
        </div>

        <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" required>
    
        </div>

        <div class="mb-3">
        <label for="address" class="form-label">Password</label>
        <input type="password" class="form-control"  name="password" placeholder="Enter your Password" required>
        
        </div>

        <div class="modal-footer">
        <input type="submit" name="Submit" class="btn btn-primary text-left" value="Register">

        <a href="../index.php">Login Here</a>
    
        </div>
    </form>
</div>


<?php include __DIR__ . '/../includes/footer.php';  ?>