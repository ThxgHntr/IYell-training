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
        <a class="link" href="{{ route('employee.create') }}">新規登録</a>
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
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">
                            <a href="{{ route('employee.show', $employee->id) }}" class="link">
                                {{ $employee->id }}
                            </a>
                        </th>
                        <td>{{ $employee->社員番号 }}</td>
                        <td>{{ $employee->氏名 }}</td>
                        <td>{{ $employee->部署 }}</td>
                        <td>
                            {{ $employee->性別 == 0 ? '女' : '男' }}
                        </td>
                        <td>
                            <a href="{{ route('employee.edit', $employee->id) }}" class="link-warning">編集</a>
                            /
                            <a href="{{ route('employee.delete', $employee->id) }}" class="link-danger">削除</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href='<?php if ($page > 1) {
                    $page -= 1;
                    echo "?page=$page";
                } ?>' aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
            <li class='page-item <?php if ($page == $_GET['page']) {
                echo 'active';
            }
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
        </ul> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
