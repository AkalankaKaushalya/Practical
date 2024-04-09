<?php
$item_page = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$total_item_query = "SELECT COUNT(*) AS total FROM tb_employee";
$total_item_result = mysqli_query($con, $total_item_query);
$total_item = mysqli_fetch_assoc($total_item_result)['total'];

$total_pages = ceil($total_item / $item_page);
$offset = ($page - 1) * $item_page;

$pageing = '';
for ($i = 1; $i <= $total_pages; $i++) {
    $active = $i == $page ? 'active' : '';
    $pageing .= '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
}

$employees = '';
$get_all_comp = "SELECT *,e.email AS emp_email FROM tb_employee e LEFT JOIN  tb_company c ON e.compani_id = c.id LIMIT $offset, $item_page";
$result = mysqli_query($con, $get_all_comp);
while($row = mysqli_fetch_assoc($result)){
    $employees .= '<tr>
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['emp_email'].'</td>
                    <td>'.$row['mobile'].'</td>
                    <td class="text-right">
                        <a href="edt_emp.php?id='.$row['emp_id'].'" class="btn btn-primary btn-icon-square-sm"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-danger btn-icon-square-sm"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>';
}



if (isset($_GET['alert'])){
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}
