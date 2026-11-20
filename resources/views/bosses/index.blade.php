<x-layout title="List the bosses">
  <h1>Here's a list of bosses</h1>
  @foreach ($bosses as $boss)
    <div>
      <h2>{{ $boss->name }}</h2>
      <p>{{ $boss->description }}</p>
    </div>
  @endforeach
</x-layout>