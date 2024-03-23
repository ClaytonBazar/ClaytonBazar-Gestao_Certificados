<?php 
class Notas{
    private int $portugues;
    private int $matematica;
    private int $quimica;
    private int $biologia;
    private int $fisica;
    private int $geografia;
    private int $ingles;
    private int $historia;
    private int $frances;
    private int $filosofia;



    public function __get($atribute)
    {
        return $this -> $atribute;
    }

    public function __set($atribute, $value)
    {
        $this -> $atribute = $value;
    }

}
