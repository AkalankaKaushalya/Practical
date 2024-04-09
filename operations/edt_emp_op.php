<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $get_emp = "SELECT * FROM tb_employee WHERE emp_id = '$id'";
    $result = mysqli_query($con, $get_emp);
    $emp_data = mysqli_fetch_assoc($result);

    $company_list = '';
    $get_comp = "SELECT * FROM tb_company";
    $result = mysqli_query($con, $get_comp);
    while($row = mysqli_fetch_assoc($result)){
        $select = '';
        if ($row['id'] == $emp_data['compani_id']){
            $select = 'selected';
        }
        $company_list .= '<option value="'.$row['id'].'" '.$select.'>'.$row['name'].'</option>';
    }


    if (isset($_POST['update_emp'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $company = $_POST['company'];
        $emp_email = $_POST['emp_email'];
        $emp_mobile = $_POST['emp_mobile'];

        $update_emp = "UPDATE tb_employee SET first_name = '$first_name', last_name = '$last_name', email = '$emp_email', mobile = '$emp_mobile', compani_id = '$company' WHERE emp_id = '$id'";
        $result = mysqli_query($con, $update_emp);
        if ($result){
            header('location: all_emp_op.php?alert=success&alert_message=Employee Updated Successfully&alert_text=success');
        } else{
            header('location: all_emp_op.php?alert=failed&alert_message=Employee Update Failed&alert_text=danger');
        }
    }
}