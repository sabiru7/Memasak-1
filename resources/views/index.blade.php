<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
    <link rel="stylesheet" href="{{ asset('css/try.css') }}">
</head>
<body>

    <div class="navbar">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div class="logo">Cookbook</div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="user-profile">
            <img src="{{ asset('images/Pfp.jpg') }}" alt="User  Profile">
        </div>
    </div>

    <div id="sideMenu" class="side-menu">
        <ul>
            <li><a href="{{ url('Dashboard') }}">&#8962; Home</a></li>
            <li><a href="{{ url('Trend') }}">&#9733; Trend</a></li>
            <li><a href="{{ url('save') }}">&#128278; Saved</a></li>
            <li><a href="{{ url('Profile') }}">&#128100; Profile</a></li>
            <li><a href="#">&#9881; Setting</a></li>
        </ul>
    </div>

    <div class="recipe-grid">
        @foreach ($recipes as $recipe)
            <div class="recipe-card">
                <img src="{{ asset('images/' . $recipe->image) }}" alt="{{ $recipe->title }}">
                <div class="recipe-title">{{ $recipe->title }}</div>
            </div>
        @endforeach
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