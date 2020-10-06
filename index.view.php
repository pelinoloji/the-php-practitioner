<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php foreach ($tasks as $task) : ?>
    <li>
      <?php if ($task->completed) : ?>
        <mark><?= $task->description; ?></mark>
      <?php else : ?>
        <?= $task->description ?>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>


</body>

</html>