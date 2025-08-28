<?php 
class Controller {
    protected function view($view, $viewData = [])
    {
        extract($viewData); // isso aqui é interessante de usar
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (!file_exists($viewFile))
        {
            throw new Exception("View file not found " . $viewFile);
        }
        require_once $viewFile;
    }
}
?>