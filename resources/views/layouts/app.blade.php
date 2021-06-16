<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posty</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
      <li>
        <a href="/" class="p-3">Home</a>
      </li>
      <li>
        <a href="/Dashboard" class="p-3">Dashboard</a>
      </li>
      <li>
        <a href="/posts" class="p-3">Posts</a>
      </li>
    </ul>

    <ul class="flex items-center">
      <li>
        <a href="/about" class="p-3">Aditya Prakarsa</a>
      </li>
      <li>
        <a href="/login" class="p-3">Login</a>
      </li>
      <li>
        <a href="/register" class="p-3">Register</a>
      </li>
      <li>
        <a href="/logout" class="p-3">logout</a>
      </li>
    </ul>
  </nav>
  @yield('content')
</body>
</html>