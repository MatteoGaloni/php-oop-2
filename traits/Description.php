<?php
trait Description
{
    private $description;

    public function setDescription($description = "La descrizione del prodotto non è disponibile")
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
