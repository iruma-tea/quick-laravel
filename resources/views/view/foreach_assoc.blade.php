<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>
<body>
@foreach ($member as $key => $value )
    <li>{{$key}}:{{$value}}</li>
@endforeach
</body>
</html>
