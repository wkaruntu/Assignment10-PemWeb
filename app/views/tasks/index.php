<?php include 'app/views/layouts/header.php'; ?>

<h2>Task Management System</h2>
<ul>
    <?php foreach ($tasks as $id => $task): ?>
        <li>
            <?= htmlspecialchars($task['name']) ?>
            <a href="index.php?controller=task&action=remove&id=<?= $id ?>" 
               style="color: red; text-decoration: none; margin-left: 10px;" 
               onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">
               Hapus
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include 'app/views/layouts/footer.php'; ?>