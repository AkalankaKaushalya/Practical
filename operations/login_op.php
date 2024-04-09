<?php
if (!isset($_SESSION['email'])) {
    if (isset($_POST['btn_login'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
           
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $hashed_pass = md5($password);

            $errors = array();

            if (!empty($_POST["email"])) {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Invalid email format");
                }
            }else{
                array_push($errors, "Email is required");
            }

            if (empty($_POST["password"])) {
                array_push($errors, "Password is required");
            }

            if (sizeof($errors) > 0) {
                $errors_string = implode("<br>", $errors);
                $_SESSION['alert'] = "warning";
                $_SESSION['alert_message'] = "Please check the following";
                $_SESSION['alert_text'] = $errors_string;
            } else {
                $check_query = "SELECT *, COUNT(email) AS user_count FROM `tb_admin` WHERE `email`='$email' AND `password` = '$hashed_pass'; ";
                $log_res = $con->query($check_query);
                if ($log_res !== false) {
                    $login_data = $log_res->fetch_assoc();
                    if ($login_data['user_count'] == 1) {
                        $_SESSION['user_data'] = $login_data;
                        $_SESSION['email'] = $login_data['email'];
                        $_SESSION['id'] = $login_data['id'];
                        header("Location: " . $base_url . "index.php");
                    } else {
                        $_SESSION['alert'] = "warning";
                        $_SESSION['alert_message'] = "Hmm, username or password seems wrong";
                    }
                } else {
                    $_SESSION['alert'] = "warning";
                    $_SESSION['alert_message'] = "Database query error";
                }
            }
        }
    }
} else {
    if (isset($_SESSION['email'])) {
        header("Location: " . $base_url . "index.php");
    }
}


if (isset($_GET['alert'])) 
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}