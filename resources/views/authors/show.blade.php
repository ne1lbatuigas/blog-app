<x-layout>
  <h2>{{ $author->name }}</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Published Blogs:</strong> {{ $author->publishcount }}</p>
    <p><strong>About Me:</strong></p>
    <p>{{ $author->bio }}</p>
  </div>

  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Affiliation Details</h3>
    <p><strong>Name:</strong> {{ $author->affiliation->name }}</p>
    <p><strong>Location:</strong> {{ $author->affiliation->location }}</p>
    <p><strong>About the Affiliation:</strong> {{ $author->affiliation->description }}</p>
  </div>

  <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author?')">Delete Author</button>

</x-layout>