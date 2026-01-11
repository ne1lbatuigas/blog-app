<form action="" method="">
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
    
  </select>

  <button type="submit" class="btn mt-4">Create Ninja</button>

  <!-- validation errors -->
  
</form>