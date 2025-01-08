<?php ob_start(); ?>
<h2>Tasks List</h2>
<form method="post" action="/store">
    <input type="text" name="title" placeholder="enter task title " required>
    <button type="submit"> Create </button>
    <h2>Users List</h2>
</form>
<form method="post" action="/SignUp">
    <input type="text" name="name" placeholder="enter your name" required >
    <input type="password" name="password" placeholder="enter your password(Use only numbers)" required>
    <button type="submit">SingUp</button>
</form>
<ul>
  <?php  foreach($tasks as $task): ?>
    <li>
        <?= htmlspecialchars($task['title']); ?>
        <a href="/delete?id=<?= $task['id']?>">Delete</a>
    </li>
    <?php endforeach; ?>
</ul>
<ul>
    <?php foreach($users as $user): ?>
    <li>
        <?= htmlspecialchars($user['name']); ?>
        <a href="/delete?id=<?= $user['id']?> ">Delete User</a>
    </li>
    <?php endforeach; ?>
</ul>
<?php $content= ob_get_clean();?>
<?php require_once __DIR__. "/layout.php"; ?>

