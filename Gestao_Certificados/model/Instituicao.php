<?php
class Instituicao{
private  $id;
private  $nomeInstituicao;
private  $provincia;
private $email;
private $password;

    

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