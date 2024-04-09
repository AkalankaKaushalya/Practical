<?php
$list_company = '';
$get_comp = "SELECT * FROM tb_company";
$res = mysqli_query($con, $get_comp);
while ($row = mysqli_fetch_array($res)) {
    $list_company .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}

if (isset($_POST['add_emp']))
{
    $errors = array();

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $emp_email = $_POST['emp_email'];
    $emp_mobile = $_POST['emp_mobile'];
    $company = $_POST['company'];

    if (!empty($_POST["emp_email"])) {
        if (!filter_var($emp_email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email format");
        }
    } else {
        array_push($errors, "Email is required");
    }

    if (empty($_POST["first_name"])) {
        array_push($errors, "First Name is required");
    }

    if (empty($_POST["last_name"])) {
        array_push($errors, "Last Name is required");
    }

    if (empty($_POST["emp_mobile"])) {
        array_push($errors, "Mobile is required");
    }

    if (count($errors) == 0) {
        $insert_emp = "INSERT INTO tb_employee(first_name, last_name, email, mobile, compani_id) VALUES('$first_name', '$last_name', '$emp_email', '$emp_mobile', '$company')";
        if ($con->query($insert_emp)) {
            header("Location: ".$base_url."add_emp.php?alert=success&alert_message=Employee Inserted successfully.&alert_text=Oky");
        } else{
            $error_message = mysqli_error($con);
            header("Location: ".$base_url."add_emp.php?alert=error&alert_message=Error Add Employee.&alert_text=".urlencode($error_message));
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