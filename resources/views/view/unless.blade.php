<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>

<body>
    @unless($random === 50)
    <p>{{$random}}は50ではありません！</p>
    @endunless
</body>

</html>