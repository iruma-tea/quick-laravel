<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>

<body>
    @isset($msg)
    <p>変数msgは「{{$msg}}」です。</p>
    @endisset
</body>

</html>