<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='/app.css'>
  <title>Task-App</title>
</head>
<body>
  <h1>MY TASKS</h1>
  <?php foreach ($tasks as $task) : ?>
    <article>
      <h2>
        <a href="/tasks/<?= $task->slug; ?>">
          <?= $task->title; ?>
  </a>        
      </h2>
      <div>
        <?= $task->excerpt; ?>
      </div>
    </article>
  <?php endforeach; ?>
</body>
</html>