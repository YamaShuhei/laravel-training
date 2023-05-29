<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
    </head>

    <body>
        {{-- タイトル --}}
        <h1>@yield('title')</h1>

        {{-- 内容 --}}
        <div class="content">@yield('content')</div>

        {{-- フッター --}}
        <div class="footer">@yield('footer')</div>
    </body>

</html>