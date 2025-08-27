<!-- <?php 
require_once '../controller/HomeController.php';
require_once '../controller/NoticiasController.php';

class Router {

    public function dispatch($url) 
    {
        $url = trim($url, '/');

        $parts = $url ? explode('/', $url) : [];

        $controllerName = $parts[0] ?? 'home';

        $controllerName = ucfirst($controllerName) . 'Controller';

        $controller = new $controllerName();
        $controller->index();
    }
}
?> -->