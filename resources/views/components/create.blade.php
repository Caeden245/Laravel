<x-layout title="Add new Boss">
  <h1>Add a new Boss</h1>

  <form method="POST" action="/bosses">
    @csrf
    <div>
      <label for="bossname">BossName:</label>
      <input type="text" id="bossname" name="bossname" />
    </div>
    <div>
      <label for="location">Location:</label>
      <input type="text" id="location" name="location" />
    </div>
      <div>
      <label for="hp">Hp:</label>
      <input type="text" id="hp" name="hp" />
    </div>
    <div>
      <label for="description">Description:</label>
      <input type="text" id="description" name="description" />
    </div>

    <div>
      <button type="submit">Save the Boss Information</button>
    </div>
  </form>
</x-layout>