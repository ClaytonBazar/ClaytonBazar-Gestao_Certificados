<?php
class Certificado{

    private int $id;
    private int $numpauta;
    private DateTime $ano;
    private int $idEstudante;
    private int $idInstituicao;
    private int $idNotas;


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