<?php
// Database connection
require_once 'dbConnect.php';

$perPage = 3;

// Calculate Total pages
$stmt = $conn->query("SELECT count(*) FROM 社員");
$total_results = $stmt->fetchColumn();
$total_pages = ceil($total_results / $perPage);

// Current page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$starting_limit = ($page - 1) * $perPage;

$query = "SELECT * FROM 社員 LIMIT $starting_limit,$perPage";

$employees = $conn->query($query)->fetchAll();
?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>一覧</title>
</head>

<style>
    html,
    body {
        height: 99%;
    }
</style>

<body class="p-5">
    <h1>IYELL 社員管理システム</h1>

    <div class="d-flex justify-content-center align-content-center flex-wrap" style="height: 70%;">
        <a class="link" href="employee_add.php">新規登録</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">社員番号</th>
                    <th scope="col">氏名</th>
                    <th scope="col">部署</th>
                    <th scope="col">性別</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($employees as $key => $employee) : ?>
                    <tr>
                        <th scope="row"><a href="/employee_detail.php?id=<?php echo $employee['id'] ?>" class="link">
                                <?php echo $employee['id']; ?></a></th>
                        <td><?php echo $employee['社員番号']; ?></td>
                        <td><?php echo $employee['氏名']; ?></td>
                        <td><?php echo $employee['部署']; ?></td>
                        <td><?php if ($employee['性別'] === 0) {
                                echo "女";
                            } else echo "男"; ?></td>
                        <td>
                            <a href="employee_update.php?id=<?php echo $employee['id'] ?>" class="link-warning">編集</a>
                            <a>/</a>
                            <a href="employee_delete.php?id=<?php echo $employee['id'] ?>" class="link-danger">削除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href='<?php if ($page > 1) {
                                                $page -= 1;
                                                echo "?page=$page";
                                            } ?>' aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
                <li class='page-item <?php if ($page == $_GET['page'])
                                            echo "active";
                                        ?>'><a class="page-link" href='<?php echo "?page=$page"; ?>' class="links">
                        <?php echo $page; ?>
                    </a></li>
            <?php endfor;
            $page = 1; ?>
            <li class="page-item">
                <a class="page-link" href='<?php if ($page < $total_pages) {
                                                $page += 1;
                                                echo "?page=$page";
                                            } ?>' aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>