<html>
<head>
<title>@yield('title')</title>
<!-- <link rel="stylesheet" href="{{ asset('js/todo.js') }}"> -->
</head>
<body>
<h1>@yield('title')</h1>
<div class = "content">
<p>@yield('content')</p>
</div>
<script src="{{ asset('js/todo.js') }}"></script>
</body>
</html>