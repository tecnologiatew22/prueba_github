<?php

require_once "iAnimal.php";

class Animal implements iAnimal
{
    #Propiedades
    public $Nombre;
    protected $FechaNac;
    private $Clasificacion;
    protected $Color;

    // Métodos
    public function asignarNombres($nombre)
    {
        $this->Nombre = $nombre;
    }

    public function asignarFechaNacimiento($fechaNac)
    {
        $this->FechaNac = $fechaNac;
    }

    public function asignarClasificacion($clasificacion)
    {
        $this->Clasificacion = $clasificacion;
    }

    public function getClasificacion()
    {
        return $this->Clasificacion;
    }

    public function asignarColor($color)
    {
        $this->Color = $color;
    }

    public function mostrarTodo()
    {
        echo "<b>Nombre: </b>" . $this->Nombre . "<br>";
        echo "<b>Fecha Nacimiento:</b> " . $this->FechaNac . "<br>";
        echo "<b>Clasificacion: </b>" . $this->Clasificacion . "<br>";
        echo "<b>Color: </b>" . $this->Color . "<br>";
    }

    public function caminar()
    {
        echo "Caminando...<br>";
    }
    public function saltar()
    {
        echo "Saltando...<br>";
    }
    public function comer()
    {
        echo "Comiendo...<br>";
    }
}
