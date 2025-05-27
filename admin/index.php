<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { margin: 0; display: flex; flex-direction: column; height: 100vh; }
        .header { height: 60px; background: #333; color: white; padding: 10px; }
        .container { flex: 1; display: flex; }
        .sidebar { width: 200px; background: #f4f4f4; padding: 10px; }
        .main-content { flex: 1; padding: 20px; overflow-y: auto; }
        a { display: block; padding: 5px; color: #333; text-decoration: none; }
        a:hover { background: #ddd; }
    </style>
</head>
<body>
    <div class="header">
        <?php include 'header.php'; ?>
    </div>

    <div class="container">
        <div class="sidebar">
            <?php include 'sidebar.php'; ?>
        </div>

        <div class="main-content" id="main-content">
            <?php include 'pages/adminHome.php'; ?>
        </div>
        
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const page = this.getAttribute('data-page');
                fetch(`pages/${page}.php`)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('main-content').innerHTML = html;
                    });
            });
        });
    </script>
</body>
</html>
