<?php

namespace App\Entity\Forms;

class Comment
{

    protected $name;
    protected $password;
    protected $text;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getText()
    {
        return $this->text;
    }


    public function setText($text): void
    {
        $this->text = $text;
    }

}
