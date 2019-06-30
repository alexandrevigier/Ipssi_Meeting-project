<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_Meeting;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_User;

    /**
     * @ORM\Column(type="integer")
     */
    private $Value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMeeting(): ?int
    {
        return $this->id_Meeting;
    }

    public function setIdMeeting(int $id_Meeting): self
    {
        $this->id_Meeting = $id_Meeting;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_User;
    }

    public function setIdUser(int $id_User): self
    {
        $this->id_User = $id_User;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->Value;
    }

    public function setValue(int $Value): self
    {
        $this->Value = $Value;

        return $this;
    }
}
