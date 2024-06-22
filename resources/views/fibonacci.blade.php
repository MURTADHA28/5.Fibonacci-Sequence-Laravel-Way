<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series</h1>
    <ul>
        @foreach ($fibonacci as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>
    <a href="/">Go Back</a>
</body>
</html>
