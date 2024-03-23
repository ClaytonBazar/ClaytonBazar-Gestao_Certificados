<?php
class Certificado{

    private int $id;
    private DateTime $ano;
    private int $idEstudante;
    private int $idInstituicao;
    private int $idNotas;
    private int $numpauta;


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