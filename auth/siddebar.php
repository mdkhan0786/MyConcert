
<style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        background-color: #f4f4f4;
    }

    .sidebar {
        width: 200px;
        background-color: #2c3e50;
        min-height: 100vh;
        color: #fff;
        padding: 20px 0;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px 20px;
    }

    .sidebar ul li a {
        color: #ecf0f1;
        text-decoration: none;
        display: block;
    }

    .sidebar ul li:hover {
        background-color: #34495e;
    }

    .main {
        flex: 1;
        padding: 20px;
    }

    .main h1 {
        margin-bottom: 20px;
    }

    .cards {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        flex: 1;
        min-width: 200px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .card h3 {
        margin-bottom: 10px;
        color: #333;
    } 

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <h2>Admin</h2>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>