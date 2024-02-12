<?php
session_start();
include "db_conn.php";

if (
    isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])
    && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phone_number'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $gender = validate($_POST['gender']);
    $dob = validate($_POST['dob']);
    $address = validate($_POST['address']);
    $email = validate($_POST['email']);
    $phone_number = validate($_POST['phone_number']);

    $user_data = 'uname=' . $uname . '&name=' . $name;

    if (empty($name)) {
		header("Location: signup.php?error=Name is required&$user_data");
		exit();
	} else if (empty($uname)) {
		header("Location: signup.php?error=USer Name is required&$user_data");
		exit();
	} else if (empty($email)) {
		header("Location: signup.php?error=Email Address is required&$user_data");
		exit();
	} else if (empty($phone_number)) {
		header("Location: signup.php?error=Phone number is required&$user_data");
		exit();
	} else if (empty($address)) {
		header("Location: signup.php?error=Address is required&$user_data");
		exit();
	} else if (empty($pass)) {
		header("Location: signup.php?error=Password is required&$user_data");
		exit();
	} else if (empty($re_pass)) {
		header("Location: signup.php?error=Re Password is required&$user_data");
		exit();
	} else if ($pass !== $re_pass) {
		header("Location: signup.php?error=The confirmation password does not match&$user_data");
		exit();
    } else {

        // Hashing the password
        $pass = md5($pass);

        // Inserting user data into database
        $sql = "SELECT * FROM users WHERE user_name='$uname' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name, gender, dob, address, email, phone_number) 
                     VALUES('$uname', '$pass', '$name', '$gender', '$dob', '$address', '$email', '$phone_number')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: welcome.php");
                exit();
            } else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
