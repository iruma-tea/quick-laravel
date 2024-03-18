<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>
<body>
    @for ($i = 1; $i < 6; $i++)
        <h{{$i}}>{{$i}}番目です。</h{{$i}}>
    @endfor
</body>
</html>
