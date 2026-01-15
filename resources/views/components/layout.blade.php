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
      <h1>
        <a href="{{ route('authors.index') }}">Blog Koto</a>
      </h1>

      @guest
        <a href="{{ route('show.login') }}" class="btn">Login</a>
        <a href="{{ route('show.register') }}" class="btn">Register</a>
      @endguest

      @auth
        <span class="border-r-1 pr-4 mr-4">
          Welcome, {{ Auth::user()->name }}
        </span>
        <a href="{{ route('authors.create') }}">Create New Author</a>
        <form action="{{ route('logout') }}" method="POST" class="m-0">
          @csrf
          <button class="btn">Logout</button>
        </form>
      @endauth
    </nav>
  </header>

  <main class="container">
    {{ $slot}}
  </main>

</body>
</html>