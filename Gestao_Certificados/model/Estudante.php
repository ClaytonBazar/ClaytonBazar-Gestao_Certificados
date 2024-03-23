<?php
class Estudante{
    private int $id;
    private String $nome;
    private String $nascimento;
    private String $anoConclusao;


    //getters setters

    public function __get($atribute)
    {
        return $this -> $atribute;
    }

    public function __set($atribute, $value)
    {
        $this -> $atribute = $value;
    }
}

?>