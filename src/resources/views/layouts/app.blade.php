<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">Todo</a>
            <a href="" class="header__category">カテゴリ一覧</a>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>
</body>
</html>