<?php 
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../model/usuario.php';

class HomeController extends Controller
{
    public function index()
    {
        // Exemplo de dados do model
        // $nome = 'Akadi';
        // $idade = 34;
        $usuario = new Usuario();
        $data = $usuario->getUserData();

        // Retorna dados para a view
        // $this->view('home/index', ['nome' => $nome, 'idade' => $idade]);
        $this->view('home/index', $data);
    }
}
?>