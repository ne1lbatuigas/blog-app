<x-layout>
  <h2>{{ $author->name }}</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Published Blogs:</strong> {{ $author->publishcount }}</p>
    <p><strong>About Me:</strong></p>
    <p>{{ $author->bio }}</p>
  </div>
</x-layout>