<?php
if (isset($_POST['add_company']))
{
    $errors = array();

    $company_name = $_POST['company_name'];
    $company_email = $_POST['company_email'];

    if (isset($_FILES['company_logo'])) {
        $logo = $_FILES['company_logo'];
        $logo_image = uniqid().'_'. basename($logo['name']);
    } else {
        array_push($errors, "Select Company Logo Image");
    }

    if (!empty($_POST["company_email"])) {
        if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email format");
        }
    }else{
        array_push($errors, "Email is required");
    }

    if (empty($_POST["company_name"])) {
        array_push($errors, "Company Name is required");
    }

    if (count($errors) == 0) {
        $chek_cmp_name = "SELECT * FROM `tb_company` WHERE `name` = '$company_name'";
        $cmp_res = $con->query($chek_cmp_name);
        if ($cmp_res->num_rows > 0) {
            $error_message = "Company Name Already Exists";
            header("Location: ".$base_url."add_comp.php?alert=warning&alert_message=Company Name Already Exists.&alert_text=".urlencode($error_message));
        } else{
            $sql = "INSERT INTO `tb_company` (`name`, `email`, `logo`) VALUES ('$company_name', '$company_email', '$logo_image')";
            $result = $con->query($sql);
            if ($result) {
                move_uploaded_file($logo['tmp_name'], 'storage/app/public/' . $logo_image);
                header("Location: ".$base_url."add_comp.php?alert=success&alert_message=Company Inserted successfully.&alert_text= Oky.");
            } else {
                $error_message = mysqli_error($con);
                header("Location: ".$base_url."add_comp.php?alert=error&alert_message=Error Add Company.&alert_text=".urlencode($error_message));
            }
        }
    } else{
        $errors_string = implode("<br>", $errors);
        $_SESSION['alert'] = "warning";
        $_SESSION['alert_message'] = "Please check the following";
        $_SESSION['alert_text'] = $errors_string;
    }
}

if (isset($_GET['alert']))
{
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}