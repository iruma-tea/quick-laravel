<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>
<body>
    <div @class([
        'column',
        'notice' => $isEnabled,
        'example' => !$isEnabled,
    ])>classディレクティブ</div>
</body>
</html>
