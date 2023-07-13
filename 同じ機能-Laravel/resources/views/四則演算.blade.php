<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>四則演算</title>
</head>

<body class="center">
    <form method="POST" action="{{ route('calc') }}" class="center">
        @csrf
        <div class="nums">
            <input type="number" name="number1" value=@if (isset($number1)) {{ $number1 }} @endif />
            <select name="operator" class="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="number2" value=@if (isset($number2)) {{ $number2 }} @endif />
        </div>
        <h2>
            Result: @if (isset($result))
                {{ $result }}
            @endif
        </h2>
        <input type="submit" name="calculate" value="calculate" class="button" />
    </form>
</body>

</html>
