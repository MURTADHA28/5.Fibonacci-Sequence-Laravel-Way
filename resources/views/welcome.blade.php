<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Input</title>
</head>
<body>
    <h1>Fibonacci Series Generator</h1>
    @if (session('error'))
        <h2 style="color: red;">{{ session('error') }}</h2>
    @endif
    <form action="/fibonacci" method="POST">
        @csrf
        <label for="length">Enter the length of Fibonacci series:</label>
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Generate</button>
    </form>
</body>
</html>
