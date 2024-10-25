<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
    <link rel="stylesheet" href="save.css">
</head>
<body>




    <div class="navbar">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div class="logo">Cookbook</div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="user-profile">
            <img src="Pfp.jpg" alt="User Profile">
        </div>
    </div>

    <header>

<h1 class="header-title">The recipe you saved</h1>

</header>

    <!-- Sidebar Menu -->
    <div id="sideMenu" class="side-menu">
        <ul>
            <li><a href="Dashboard.php">&#8962; Home</a></li>
            <li><a href="Trend.php">&#9733; Trend</a></li>
            <li><a href="save.php">&#128278; Saved</a></li>
            <li><a href="Profile.php">&#128100; Profile</a></li>
            <li><a href="#">&#9881; Setting</a></li>
        </ul>

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
  </div>


  <section class="grid">
        <div class="card">
            <img src="Nasi.jpg" alt="Nasi Uduk Pak Tanto">
            <div class="description">Nasi Uduk Pak Tanto</div>
        </div>
        <div class="card">
            <img src="Nasi.jpg" alt="Nasi Uduk Pak Tanto">
            <div class="description">Nasi Uduk Pak Tanto</div>
        </div>
        <div class="card">
            <img src="Nasi.jpg" alt="Nasi Uduk Pak Tanto">
            <div class="description">Nasi Uduk Pak Tanto</div>
        </div>
        <div class="card">
            <img src="Nasi.jpg" alt="Nasi Uduk Pak Tanto">
            <div class="description">Nasi Uduk Pak Tanto</div>
        </div>
    </section>
</body>

</html>