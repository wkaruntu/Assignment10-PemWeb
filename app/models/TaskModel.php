<?php

class TaskModel {
    private $dataFile = 'data/tasks.json';

    public function getAllTasks() {
        if (file_exists($this->dataFile)) {
            $json = file_get_contents($this->dataFile);
            return json_decode($json, true) ?? [];
        }
        return [];
    }

    public function addTask($taskName) {
        $tasks = $this->getAllTasks();
        $tasks[] = ['name' => $taskName];
        file_put_contents($this->dataFile, json_encode($tasks));
    }

    public function removeTask($taskId) {
        $tasks = $this->getAllTasks();
        if (isset($tasks[$taskId])) {
            unset($tasks[$taskId]);
            file_put_contents($this->dataFile, json_encode(array_values($tasks))); // Reset array keys
        }
    }
    

}