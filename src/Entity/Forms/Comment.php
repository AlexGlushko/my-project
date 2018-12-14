<?php

namespace App\Entity\Forms;

use Symfony\Component\Validator\Constraints as Assert;

class Comment
{

    /**
     * @Assert\NotBlank
     */
    protected $name;

    /**
     * @Assert\NotBlank
     * @Assert\NotNull
     */
    protected $password;

    /**
     * @Assert\NotBlank()
     * @Assert\NotNull()
     * @Assert\Length(
     *     min = 10,
     *     max = 220
     * )
     */
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
