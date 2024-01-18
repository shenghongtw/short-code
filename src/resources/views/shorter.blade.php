<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>短網址生成器</title>
</head>
<body> 
    <h1>短網址生成器</h1>
    <form action="{{ route('shorter') }}" method="POST">
        @csrf <!-- CSRF 保護 -->
        <label for="url">輸入 URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">生成短網址</button>
    </form>
    {{-- 檢查是否有短網址 ID --}}
    @if(isset($shortUrl))
        <p>短網址: <a href="{{ url('/'.$shortUrl) }}">{{ url('/'.$shortUrl) }}</a></p>
    @endif
</body>
</html>