<?php

class Pokemon {

    protected string $name;
    protected float $hp;
    protected float $atk;
    

    public function __construct(string $name, float $hp, float $atk)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
    }

    public function isDead() : bool {
        return $this->hp <= 0; // cette ligne suffit car je lui demande de retourner un bool
        // if ($this->hp <= 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    public function attaquer(Pokemon $pokemon) : void {
        if ($pokemon->getHp() > 0) {
            $pokemon->setHp($pokemon->getHp() - $this->atk);
        } else {
            $pokemon->setHp(0);
        }
        
    }

    public function __toString()
    {
        return "Name : $this->name".PHP_EOL."HP : $this->hp".PHP_EOL."Atk : $this->atk".PHP_EOL;
    }


    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name) : void
    {
       $this->name = $name;
    }

    /**
     * Get the value of hp
     */ 
    public function getHp() : float
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp) : void
    {
        $this->hp = $hp;
    }

    /**
     * Get the value of atk
     */ 
    public function getAtk() : float
    {
        return $this->atk;
    }

    /**
     * Set the value of atk
     *
     * @return  self
     */ 
    public function setAtk($atk) : void
    {
        $this->atk = $atk;
    }
}