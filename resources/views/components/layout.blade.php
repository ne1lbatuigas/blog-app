<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Koto</title>

  @vite('resources/css/app.css')
</head>
<body>
  @if (session('success'))
    <div class="bg-green-100 text-green-700 p-4 mb-4">
      {{ session('success') }}
    </div>
  @endif
  
  <header>
    <nav>
      <h1>Blog Koto</h1>
      <a href="{{ route('authors.index') }}">All Authors</a>
      <a href="{{ route('authors.create') }}">Create New Author</a>

      <a href="{{ route('show.login') }}" class="btn">Login</a>
      <a href="{{ route('show.register') }}" class="btn">Register</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot}}
  </main>

</body>
</html>