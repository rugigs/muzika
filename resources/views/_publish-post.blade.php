<div class="border rounded text-center">
  <form class="" action="index.html" method="post">
    @csrf

    <input
    type="text"
    name=""
    placeholder="Search for a song to share!"
    class="w-100 border rounded"
    >

    <hr>

    <textarea
    name="name" rows="4" 
    placeholder="Describe the song!"
     class="w-100 border rounded"
     ></textarea>

    <hr>

    <button
    type="button"
    name="button"
    class="btn btn-secondary"
    >Share!</button>

  </form>
</div>
