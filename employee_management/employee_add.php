<?php
// Database connection
require_once 'dbConnect.php';

if (isset($_POST['submit'])) {
    $query = "INSERT INTO 社員(社員番号, 氏名, 部署, 性別) VALUES(:empID, :name, :dept, :gender)";
    $stmt = $conn->prepare($query);
    $stmt->execute([
        ':empID' => $_POST['社員番号'],
        ':name' => $_POST['氏名'],
        ':dept' => $_POST['部署'],
        ':gender' => $_POST['性別'],
    ]);
    header("Location: finished_page.php");
}
?>


<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>登録</title>
</head>

<style>
    html,
    body {
        height: 99%;
    }
</style>

<body class="p-5">
    <h1>IYELL 社員管理システム</h1>

    <div class="d-flex flex-column justify-content-center mx-5 px-5" style="height: 70%;">
        <form method="POST" action="" class="mx-5 px-5 mb-3">
            <div class="row mb-2">
                <label for="社員番号" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="社員番号" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="氏名" class="col-sm-2 col-form-label fw-bold">氏名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="氏名" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="部署" class="col-sm-2 col-form-label fw-bold">部署</label>
                <div class="col-sm-8">
                    <select class="form-select" name="部署">
                        <option selected>Items</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <label for="性別" class="col-sm-2 col-form-label fw-bold">性別</label>
                <div class="col-sm-2 form-check px-5">
                    <input class="form-check-input" type="radio" name="性別" value="0" checked>
                    <label class="form-check-label">
                        女
                    </label>
                </div>
                <div class="col-sm-2 form-check">
                    <input class="form-check-input" type="radio" name="性別" value="1">
                    <label class="form-check-label">
                        男
                    </label>
                </div>
            </div>
            <input type="submit" name="submit" value="登録" class="btn btn-primary" />
        </form>
        <div class="mx-5 px-5 mb-3">
            <a class="link" href="employee_list.php">戻る</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>