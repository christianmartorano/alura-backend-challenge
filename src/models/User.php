<?php 

namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'users')]
class User extends BaseEntity
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    private int $id;

    #[Column(type: 'string')]
    private string $email;

    #[Column(type: 'string')]
    private string $password;

    #[Column(type: 'string')]
    private string $name;

    #[Column(type: 'string')]
    private string $phone;

    #[Column(type: 'string')]
    private string $description;

    #[OneToOne(inversedBy: 'users', targetEntity: File::class)]
    #[JoinColumn(name: 'file_id', referencedColumnName: 'id')]
    private ?File $file;

    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file): self
    {
        $this->file = $file;
        return $this;
    }

    #[OneToOne(inversedBy: 'users', targetEntity: Addresses::class)]
    #[JoinColumn(name: 'address_id', referencedColumnName: 'id')]
    private ?Addresses $address;

    public function getAddress(): ?Addresses
    {
        return $this->address;
    }

    public function setAddress(?Addresses $address): self
    {
        $this->address = $address;
        return $this;
    }

}
