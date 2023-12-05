<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', '預設標題')</title>
</head>

<body>

    <div class="container">
        @section('content')
        <p>這是 'content' 區塊的預設內容。</p>
        @show
    </div>

    <div class="footer">
        @section('footer')
        <p>這是 'footer' 區塊的預設內容。</p>
        @show
    </div>

</body>

</html> 