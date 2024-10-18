<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Cookbook</title>
    <link rel="stylesheet" href="profile..css">
</head>
<body>
    

<div class="navbar">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div class="logo">Cookbook</div>
     
        <div class="user-profile">
            
            <img src="Pfp.jpg" alt="User Profile">
        </div>
    </div>

    <!-- Sidebar Menu -->
    <div id="sideMenu" class="side-menu">
        <ul>
            <li><a href="Dashboard.php">&#8962; Home</a></li>
            <li><a href="Trend.php">&#9733; Trend</a></li>
            <li><a href="save.php">&#128278; Saved</a></li>
            <li><a href="Profile.php">&#128100; Profile</a></li>
            <li><a href="#">&#9881; Setting</a></li>
        </ul>
    </div>

    <!-- Profile Section -->
    <div class="profile-container">
        <div class="profile-box">
            <div class="profile-pic">
                <img src="Pfp.jpg" alt="Profile Picture">
                <div class="camera-icon">
                    <img src="EditProfil.jpg" alt="Change Picture">
                </div>
            </div>
            <div class="username-container">
                <input type="text" id="username" value="wati">
                <div class="edit-icon">
                    <img src="EditPfp.jpg" alt="Edit Username">
                </div>
            </div>
            <div class="buttons">
                <button class="cancel-btn">Cancel</button>
                <button class="confirm-btn">Confirm</button>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("sideMenu");
            if (menu.style.width === "250px") {
                menu.style.width = "0";
            } else {
                menu.style.width = "250px";
            }
        }
    </script>

</body>
</html>
