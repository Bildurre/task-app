<x-layout>
  <h1>MY TASKS</h1>
  @foreach ($tasks as $task)
    <article>
      <h2>
        <a href="/tasks/{{ $task->id }}">
          {{ $task->title }}
        </a>        
      </h2>
      <div>
        {{ $task->owner_mail }}
      </div>
    </article>
  @endforeach
</x-layout>