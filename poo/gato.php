<?php
require_once "animal.php";
class Gato extends Animal
{
    var $apodo;

    public function asignarApodo($apodo)
    {
        $this->apodo = $apodo;
    }

    public function arañar()
    {
        echo "<b>Arañando...</b><br>";
    }

    public function mostrarTodo()
    {
        echo "<b>Nombre: </b>" . $this->Nombre . "<br>";
        echo "<b>Fecha Nacimiento:</b> " . $this->FechaNac . "<br>";
        echo "<b>Clasificacion: </b>" . $this->getClasificacion() . "<br>";
        echo "<b>Color: </b>" . $this->Color . "<br>";
        echo "<b>Apodo: </b>" . $this->apodo . "<br>";
    }
}
