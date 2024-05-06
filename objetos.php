<?php
class Filosofia{
    public $Pensador;
    public $frases;

    function __construct($Pensador, $frases){
        $this->Pensador = $Pensador;
        $this->frases = $frases;
    }

    function get_Pensador() {
        return $this->Pensador;
    }

    function get_frases(){
        return $this->frases;
    }
}

$artista = new Filosofia("Dopre","É q meu deus é uma mulher q trabalha no puteiro, q ama os pecador, as put@s e os maconheiros");//aqui esta sendo criado um novo objeto

echo"O Pensador é:". $artista->get_Pensador();// esta sendo invocado um novo objeto, o qual esta ivocando o método (function) get_Pensador(), q por sua vez, esta renderizando o texto(Pensador da fruta)



echo"A frases é : ". $artista->get_frases();
?>