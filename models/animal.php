<?php
class Animal
{
    public string $Animal;
    private string $icon;

    public function __construct(string $Animal)
    {
        //  controllo se quello scritto è un valore consentito
        if (strtolower($Animal) === "cane" || strtolower($Animal) === "gatto") {
            $this->Animal = $Animal;
        } else {
            throw new Exception("inserisci come tipo Cane o Gatto");
        }
    }

    public function getAnimal()
    {
        return $this->Animal;
    }

    /**
     * Get the value of icon
     */ 
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     */ 
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * Set the value of Animal
     *
     */ 
    public function setAnimal($Animal)
    {
        $this->Animal = $Animal;
    }
} 