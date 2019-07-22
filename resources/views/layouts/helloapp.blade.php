<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            max-width: 2000px;
            min-width: 480px;
            background-size: cover;
        }
        .btn {
            transition: 1s;
        }
        li {
            list-style: none;
            color: #DDD;
        }
        li a{
            color: #DDD;
        }
    </style>
</head>

<body>
    <div>
    @yield('header')
    </div>
    <div>
    @yield('main')
    <div>
    @yield('info')
    </div>
    <div>
    @yield('footer')
    </div>
<script src="/js/ex01.js"></script>
</body>

</html>