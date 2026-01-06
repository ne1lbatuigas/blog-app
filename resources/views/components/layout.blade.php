<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Koto</title>
</head>
<body>
  
  <header>
    <nav>
      <h1>Blog Koto</h1>
      <a href="/authors">All Authors</a>
      <a href="/authors/create">Create New Author</a>
    </nav>
  </header>

  <main class="container">
    {{ $slot}}
  </main>

</body>
</html>