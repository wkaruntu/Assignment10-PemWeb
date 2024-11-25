<?php include 'app/views/layouts/header.php'; ?>

<h2>Add New Task</h2>
<form action="index.php?controller=task&action=create" method="POST">
    <label for="task_name">Task Name:</label>
    <input type="text" id="task_name" name="task_name" placeholder="Input Task Name" required>
    <button type="submit">Add</button>
</form>

<?php include 'app/views/layouts/footer.php'; ?>