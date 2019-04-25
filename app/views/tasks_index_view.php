<ul>
    <?php foreach ($this->tasks as $task): ?>
    <li><?= $task['name'] ?></li>
    <?php endforeach; ?>
    <form method="POST" action="tasks/create">
        <input type="submit" value="Create"/>
    </form>
</ul>

