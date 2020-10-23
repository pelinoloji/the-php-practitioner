<?php require('partials/head.php'); ?>

<h1>Home Page</h1>


<?php foreach ($users as $user) : ?>

  <small><span><?= $user->name; ?></span>,</small>
<?php endforeach; ?>

<h1>Submit your name</h1>

<form method="post" action="/names">
  <input name="name"></input>
  <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>