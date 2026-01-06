<x-layout>
  <h2>Currently Available Authors</h2>

  <ul>
    @foreach($authors as $author)
      <li>
        <p>{{ $author['name'] }}</p>
        <a href="/authors/{{ $author['id'] }}">View Details</a>
      </li>
    @endforeach
  </ul>
</x-layout>