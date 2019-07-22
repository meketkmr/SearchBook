<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>書籍検索</title>

<body>
<h2>国会図書館蔵書検索</h2>
<form  method="post" action="book">
    @csrf
    <input type="text" name="BookName">
    <input type="submit" value="検索">
</form>
</body>
</html>