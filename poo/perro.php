<?php
require_once "animal.php";

class Perro extends Animal
{
    var $Apodo;

    public function asignarApodo($apodo)
    {
        $this->Apodo = $apodo;
    }

    public function aullar()
    {
        echo "<b>Aullando...</b><br>";
    }

    public function morder()
    {
        echo "<b>Mordiendo...</b><br>";
    }

    public function mostrarTodo()
    {
        echo "<b>Nombre: </b>" . $this->Nombre . "<br>";
        echo "<b>Fecha Nacimiento:</b> " . $this->FechaNac . "<br>";
        echo "<b>Clasificacion: </b>" . $this->getClasificacion() . "<br>";
        echo "<b>Color: </b>" . $this->Color . "<br>";
        echo "<b>Apodo: </b>" . $this->Apodo . "<br>";
    }
}
