<?php
class Instituicao{
private int $id;
private String $nomeInstituicao;
private String $provincia;

    

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