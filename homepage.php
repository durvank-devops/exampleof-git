<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f2f4f7;
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            background: #fff;
            padding: 15px 0; /* Vertical padding only */
            display: flex;
            align-items: center;
            justify-content: center; /* This centers the nav-links */
            border-bottom: 2px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* LOGO - Positioned far left */
        .logo {
            position: absolute;
            left: 40px;
        }

        .logo img {
            height: 38px;
        }

        /* CENTERED LINKS - Using Flexbox */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 40px; /* Spacing between centered items */
        }

        /* LOGOUT - Positioned far right */
        .nav-right {
            position: absolute;
            right: 40px;
        }

        .navbar a {
            text-decoration: none;
            color: inherit;
        }

        .nav-item {
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            padding: 8px 14px;
            border-radius: 4px;
            transition: 0.2s;
        }

        .nav-item:hover {
            background: #ddd;
        }

        /* Original Active Style */
        .active {
            border: 2px solid #333;
        }

        /* Main Content Styling */
        .main-box {
            width: 92%;
            height: 350px;
            margin: 40px auto;
            background: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .profile-box {
            width: 420px;
            height: 130px;
            margin: 40px auto;
            background: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            color: #444;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <img src="" alt="LOGO HERE">
        </div>

        <div class="nav-links">
            <a href="homepage.html"><div class="nav-item active">HOME</div></a>
            <a href="dashboard.html"><div class="nav-item">DASHBOARD</div></a>
            <a href="tasks.html"><div class="nav-item">TASKS</div></a>
            <a href="employees.html"><div class="nav-item">EMPLOYEES</div></a>
        </div>

        <div class="nav-right">
            <div class="nav-item">LOGOUT</div>
        </div>
    </div>

    <div class="main-box"></div>

    <div class="profile-box">
        YOUR PROFILE
    </div>

</body>
</html>