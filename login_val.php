<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_check_query = "SELECT * FROM users WHERE email='$email'";
    $user_check = $dbcon->query($user_check_query);

    if ($user_check->num_rows == 0) {
        // if username not match
        $email_not_matched = "Your email not matched!";
    } else {
        // if username match
        $row = $user_check->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // if password matched
            // status check
            if ($row['status'] == 1) {
                $waiting = "Waiting for admin approval";
            } else {
                // good to go
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $row['fname'];
                $_SESSION['photo'] = $row['photo'];

                // Check user ID to determine the redirect
                $userID = $row['id'];
                if ($userID == 1) {
                    // User with ID 1 is an admin
                    header('location: admin/index.php');
                } elseif ($userID == 2) {
                    // User with ID 2 has a different redirect
                    header('location: user2/index.php');
                } elseif ($userID == 3) {
                    // User with ID 3 has a different redirect
                    header('location: user3/index.php');
                } elseif ($userID == 4) {
                    // Default redirect for other users
                    header('location: user4/index.php');
                } else {
                    // Default redirect for other users
                    header('location: login.php');
                }
            }
        } else {
            // if password not matched
            $password_not_matched = "Your password not matched";
        }
    }
}
?>
