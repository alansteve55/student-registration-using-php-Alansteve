<?php 
    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!--Links-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <!--Navbar-->
    <nav>
        <img src="images/logo.png" alt="" class="logo">
        <ul id="menu-links">
            <li>Home</li>
            <li>Services</li>
            <li>Projects</li>
            <li>About us</li>
        </ul>
        <button class="nav-btn" id="loginBtn"><a href="logout.php">Logout</a><img src="images/arrow-white.png" alt=""></button>
        <img src="images/menu.png" alt="" class="menu-icon" onclick="toggleMenu()">
    </nav>

    <!--Header class-->
    <div class="header">
        <div class="header-content">
            <h1><span>Welcome</span><br><span>You</span></h1>
            <p>Welcome to Zennifer Academy! 
             Whether you're a student ready to explore new opportunities or a parent seeking quality education,
             we're here to assist you every step of the way. <br><br>
             Join our vibrant learning community and unlock your potential with us. Welcome aboard!
            </p>
        </div>
        <img src="images/user.png" alt="" class="user-img">
    </div>
   
<!--JavaScript-->
<script src="script.js"></script>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>