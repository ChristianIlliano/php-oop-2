<?php

trait Weightable {
    private int $weighKg;



    /**
     * Get the value of weighKg
     */ 
    public function getWeighKg()
    {
        return $this->weighKg;
    }

    /**
     * Set the value of weighKg
     *
     */ 
    public function setWeighKg($weighKg)
    {
        $this->weighKg = $weighKg;
    }
}