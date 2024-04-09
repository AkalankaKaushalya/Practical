<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $edit_comp = "SELECT * FROM tb_company WHERE id = $id";
    $result = mysqli_query($con, $edit_comp);
    $comp_data = mysqli_fetch_assoc($result);

    if (isset($_POST['add_company'])) {

        $errors = array();

        $id = $_GET['id'];
        $company_email = $_POST['company_email'];
        $company_old_logo = $_POST['old_image'];

        $logo_image = '';
        if (isset($_FILES['company_logo']) && $_FILES['company_logo']['name'] != '') {
            unlink( 'storage/app/public/'.$company_old_logo);
            $logo = $_FILES['company_logo'];
            $logo_image = uniqid().'_'. basename($logo['name']);
        } else {
            $logo_image = $company_old_logo;
        }

        if (!empty($_POST["company_email"])) {
            if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email format");
            }
        }else{
            array_push($errors, "Email is required");
        }

        if (count($errors) == 0) {
            $sql = "UPDATE `tb_company` SET `email` = '$company_email', `logo` = '$logo_image' WHERE `id` = '$id'";
            $result = $con->query($sql);
            if ($result) {
                move_uploaded_file($logo['tmp_name'], 'storage/app/public/' . $logo_image);
                header("Location: ".$base_url."all_comp.php?page=1&alert=success&alert_message=Company Updated successfully.&alert_text= Oky.");
            } else {
                $error_message = mysqli_error($con);
                header("Location: ".$base_url."edt_comp.php?id=$id&alert=error&alert_message=Error Update Company.&alert_text=".urlencode($error_message));
            }
        } else{
            $errors_string = implode("<br>", $errors);
            $_SESSION['alert'] = "warning";
            $_SESSION['alert_message'] = "Please check the following";
            $_SESSION['alert_text'] = $errors_string;
        }
    }
}

if (isset($_GET['alert'])){
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}