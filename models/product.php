<?php
require_once __DIR__ . "§/../traits/weightable.php";

class Product
{
    use Weightable;

    private string $name;
    public string $img;
    private int $price;
    public Animal $Animal;


    public function __construct(string $_name, int $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        if(isset($this->img) && !empty($this->img)) {
            return $this->img;
        }
        return "placeholder";
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        if ($img === "") {
            throw new Exception("l'immagine non può essere vuota");
        }
        $this->img = $img;

    }
}
