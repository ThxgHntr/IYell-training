<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>詳細</title>
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
        <div class="mx-5 px-5 mb-3">
            <div class="row mb-2">
                <label for="社員番号" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                <div class="col-sm-8">
                    {{ $employee->id }}
                </div>
            </div>
            <div class="row mb-2">
                <label for="氏名" class="col-sm-2 col-form-label fw-bold">氏名</label>
                <div class="col-sm-8">
                    {{ $employee->社員番号 }}
                </div>
            </div>
            <div class="row mb-2">
                <label for="部署" class="col-sm-2 col-form-label fw-bold">部署</label>
                <div class="col-sm-8">
                    {{ $employee->氏名 }}
                </div>
            </div>
            <div class="row mb-2">
                <label for="性別" class="col-sm-2 col-form-label fw-bold">性別</label>
                <div class="col-sm-8">
                    {{ $employee->性別 == 0 ? '女' : '男' }}
                </div>
            </div>
        </div>
        <div class="mx-5 px-5 mb-3">
            <a class="link" href="{{ route('employee.index') }}">戻る</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
