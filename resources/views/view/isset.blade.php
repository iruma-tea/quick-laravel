<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>{{$appTitle}}</title>
</head>

<body>
    {{--
    @isset($msg)
    <p>変数msgは「{{$msg}}」です。</p>
    @endisset
    --}}
    {{--
    @empty($msg)
    <p>メッセージがありません！</p>
    @endempty
    --}}
    @isset($msg)
    <p>変数msgは「{{$msg}}」です。</p>
    @else
    <p>メッセージがありません！</p>
    @endisset
</body>

</html>