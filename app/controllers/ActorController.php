<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Actor; // Asegúrate de importar el modelo Actor

class ActorController extends Controller {
    public function index(...$params) {
        $actores = Actor::all();
        $this->view("actor_list", ['actores' => $actores]);
        echo "hola desde index de ActorController";
    }

    public function new(...$params) {
        if (isset($_POST["first_name"])) {
            var_dump($_POST);
            exit();
        } else {
            $this->view("new_actor");
        }
    }
}
?>

