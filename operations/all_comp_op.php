<?php
$item_page = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$total_item_query = "SELECT COUNT(*) AS total FROM tb_company";
$total_item_result = mysqli_query($con, $total_item_query);
$total_item = mysqli_fetch_assoc($total_item_result)['total'];

$total_pages = ceil($total_item / $item_page);
$offset = ($page - 1) * $item_page;

$pageing = '';
for ($i = 1; $i <= $total_pages; $i++) {
    $active = $i == $page ? 'active' : '';
    $pageing .= '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
}

$companys = '';
$get_all_comp = "SELECT * FROM tb_company LIMIT $offset, $item_page";
$result = mysqli_query($con, $get_all_comp);
while($row = mysqli_fetch_assoc($result)){
    $companys .= '<tr>
                    <td><img src="'.$base_url.'storage/app/public/'.$row['logo'].'" alt="user" class="thumb-xl rounded">'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td class="text-right">
                        <a href="edt_comp.php?id='.$row['id'].'" class="btn btn-primary btn-icon-square-sm"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-danger btn-icon-square-sm"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>';
}



if (isset($_GET['alert'])){
    $_SESSION['alert'] = $_GET['alert'];
    $_SESSION['alert_message'] = $_GET['alert_message'];
    $_SESSION['alert_text'] = $_GET['alert_text'];
}

