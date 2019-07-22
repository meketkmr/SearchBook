<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>書籍検索</title>

<body>
<h2>国会図書館蔵書検索結果</h2>
<table>
    @foreach($books as $book)
    <tr>
        <td><a href="{{$book[1]}}">{{$book[0]}}</a> </td>
    </tr>
    @endforeach
</table>
<form  method="post" action="book">
    @csrf
    @if($BookIndex >=10)
        <input type="hidden" name="BookIndex" value="{{$BookIndex-10}}">
        <input type="hidden" name="BookName" value="{{$BookName}}">
        <input type="submit" value="前のページへ戻る">
    @endif
</form>
<form  method="post" action="book">
    @csrf
    @if(count($books) == 10)
        <input type="hidden" name="BookIndex" value="{{$BookIndex+10}}">
        <input type="hidden" name="BookName" value="{{$BookName}}">
        <input type="submit" value="次のページへ行く">
    @endif

</form>
</body>
</html>