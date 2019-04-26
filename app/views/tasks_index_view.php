<table>
    <?php foreach ($this->tasks as $task): ?>
    <tr>
        <td><?= $task['name'] ?></td>
        <td>
            <form method="POST">
                <input type="text" name="delete" value="<?= $task['id'] ?>"/>
                <input type="submit" value="Del"/>
            </form>
        </td>

    </tr>
    <?php endforeach; ?>
</table>
<form method="POST" action="tasks/create">
    <input type="submit" value="Create"/>
</form>


