<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='/app.css'>
  <title>Task-App</title>
</head>
<body>
  <article>
    <h1><?= $task->title; ?></h1>
    <div>
      <p><?= $task->date; ?></p>
      <?= $task->body; ?>
    </div>
  </article>
  <a href="/">Go Back</a>
</body>
</html>