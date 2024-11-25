<?php

class Router {
    public function run() {
        $controller = $_GET['controller'] ?? 'task';
        $action = $_GET['action'] ?? 'index';

        $controllerName = ucfirst($controller) . "Controller";
        $controllerPath = "app/controllers/" . $controllerName . ".php";

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controllerInstance = new $controllerName();
            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action();
            } else {
                echo "Action not found!";
            }
        } else {
            echo "Controller not found!";
        }
    }
}