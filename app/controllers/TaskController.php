<?php

require_once 'app/models/TaskModel.php';

class TaskController {
    public function index() {
        $taskModel = new TaskModel();
        $tasks = $taskModel->getAllTasks();
        include 'app/views/tasks/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskModel = new TaskModel();
            $taskModel->addTask($_POST['task_name']);
            header('Location: index.php?controller=task&action=index');
            exit();
        }
        include 'app/views/tasks/create.php';
    }

    public function remove() {
        if (isset($_GET['id'])) {
            $taskModel = new TaskModel();
            $taskModel->removeTask($_GET['id']);
            header('Location: index.php?controller=task&action=index');
            exit();
        } else {
            echo "Invalid task ID!";
        }
    }
    

}