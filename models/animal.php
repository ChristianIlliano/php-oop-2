<?php
class Animal
{
    public string $categoria;

    public function __construct(string $categoria)
    {
        //  controllo se quello scritto è un valore consentito
        if (strtolower($categoria) === "cane" || strtolower($categoria) === "gatto") {
            $this->categoria = $categoria;
        } else {
            throw new Exception("inserisci come tipo Cane o Gatto");
        }
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
} 