<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Route {
    private static $routes = [];

    public static function get($path, $callback) {
        self::$routes['GET'][$path] = $callback;
    }

    public static function post($path, $callback) {
        self::$routes['POST'][$path] = $callback;
    }

    public static function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove /projeto se estiver em localhost/projeto/
        $base = '/'; // altere para '/teuProjeto/' se estiver dentro de uma pasta
        $uri = '/' . trim(str_replace($base, '', $uri), '/');

        if ($uri === '//') $uri = '/';

        if (isset(self::$routes[$method][$uri])) {
            call_user_func(self::$routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "<h1>404 - Página não encontrada</h1>";
        }
    }
}
