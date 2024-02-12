<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <!--Links-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <!--Header class-->
    <div class="header">
        <div class="header-content">
            <h1><span>Free</span><br><span>Lancer</span></h1>
            <div class="btn-container">
                <button class="btn-dark">Request call back <img src="images/phone.png" alt=""></button> 
                <button class="btn-light">Know More <img src="images/arrow-black.png" alt=""></button>
            </div>
        <p>Passionate UI/UX designer with 10+ years of experience</p>
        </div>
        <img src="images/user.png" alt="" class="user-img">
    </div>

    <form action="signup-check.php" method="post" class="registration-form">
    <h2 class="form-title">SIGN UP</h2><br><br>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <div class="form-column">
        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="name" placeholder="Name"><br>
        <?php } ?>

        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="uname" placeholder="User Name"><br>
        <?php } ?>

        <label>Email Address</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="text" name="email" placeholder="Email Address" value="<?php echo $_GET['email']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="email" placeholder="Email Address" ><br>
        <?php } ?>

        <label>Phone Number</label>
        <?php if (isset($_GET['phone_number'])) { ?>
            <input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo $_GET['phone_number']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="phone_number" placeholder="Phone Number"><br>
        <?php } ?>

        <label>Gender</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>

    <div class="form-column">
    
        <label>Date of Birth</label>
        <input type="date" name="dob"><br>

        <label>Address</label><br>
        <textarea name="address" placeholder="Address"></textarea><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Re-enter Password</label>
        <input type="password" name="re_password" placeholder="Re-enter Password"><br>

        <button type="submit">Sign Up</button>
    <a href="index.php" class="ca">Already have an account?</a>
    </div>

    
</form>



  
<!--JavaScript-->
<script src="script.js"></script>  


</body>
</html>