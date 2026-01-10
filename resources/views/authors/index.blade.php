<x-layout>
  <h2>Currently Available Authors</h2>

  <ul>
    @foreach($authors as $author)
      <li>
        <x-card href="/authors/{{ $author['id'] }}" :highlight="$author['publishcount'] > 70">
          <h3>{{ $author['name'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>