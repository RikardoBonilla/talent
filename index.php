<?php

    /**
     * 
     * The purpose of this file is to handle the correct redirection of 
     * the application, validating that the classes and methods exist.
     * 
     */

    require_once 'core/core.php';

    $controller = isset($_GET['controller']) ? $_GET['controller'].'Controller' : 'mainController';
    $method = isset($_GET['method']) ? $_GET['method'] : 'index';
    
    if (file_exists('controllers/' . $controller . '.php')) {
        require_once 'controllers/' . $controller . '.php';
        if (method_exists($controller, $method)) {
            $controller = new $controller;
            call_user_func([$controller, $method]);
        } else {
            die("Error : The method or function [{$method}()] does not exist");
        }
    } else {
        die("Error : The controller [{$controller}] does not exist.");
    }
    
    