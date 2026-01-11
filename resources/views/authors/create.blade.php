<x-layout>
  <form action="" method="">
    @csrf

    <h2>Create a New Author</h2>

    <!-- author Name -->
    <label for="name">Author Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >

    <!-- publish Count -->
    <label for="publishcount">Published Blogs (0-100):</label>
    <input 
      type="number" 
      id="publishcount" 
      name="publishcount" 
      required
    >

    <!-- author Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    ></textarea>

    <!-- select an affiliation -->
    <label for="affiliation_id">Affiliation:</label>
    <select id="affiliation_id" name="affiliation_id" required>
      <option value="" disabled selected>Select an affiliation</option>
      @foreach($affiliation as $affiliations)
        <option value="{{ $affiliations->id }}">
          {{ $affiliations->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Author</button>

    <!-- validation errors -->
    
  </form>
</x-layout>