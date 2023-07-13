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
        <form method="POST" action="{{ route('employee.store') }}" class="mx-5 px-5 mb-3">
            @csrf
            <div class="row mb-2">
                <label for="empID" class="col-sm-2 col-form-label fw-bold">社員番号</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="empID" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="name" class="col-sm-2 col-form-label fw-bold">氏名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="dept" class="col-sm-2 col-form-label fw-bold">部署</label>
                <div class="col-sm-8">
                    <select class="form-select" name="dept">
                        <option selected>Items</option>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <label for="gender" class="col-sm-2 col-form-label fw-bold">性別</label>
                <div class="col-sm-2 form-check px-5">
                    <input class="form-check-input" type="radio" name="gender" value="0" checked>
                    <label class="form-check-label">
                        女
                    </label>
                </div>
                <div class="col-sm-2 form-check">
                    <input class="form-check-input" type="radio" name="gender" value="1">
                    <label class="form-check-label">
                        男
                    </label>
                </div>
            </div>
            <input type="submit" name="submit" value="登録" class="btn btn-primary" />
        </form>
        <div class="mx-5 px-5 mb-3">
            <a class="link" href="{{ route('employee.index') }}">戻る</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
