<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <title>{{ $title }}</title>
</head>

<style>
    html,
    body {
        height: 99%;
    }
</style>

<body class="p-5">
    <h1>IYELL 社員管理システム</h1>
    {{ $slot }}
    @section('return')
        <div class="mx-5 px-5 mb-3">
            <a class="link" href="{{ route('employee.index') }}">戻る</a>
        </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
