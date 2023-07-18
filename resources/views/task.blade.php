<x-layout>
  <article>
    <h1>{{ $task->title }}</h1>
    <div>
      <p>{{ $task->description }}</p>
    </div>
  </article>
  <a href="/">Go Back</a>
</x-layout>