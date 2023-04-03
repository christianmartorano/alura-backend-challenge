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
#[Table(name: 'animals')]
class Animal extends BaseEntity
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    private int|null $id = null;

    #[Column(type: 'string')]
    private string $name;

    #[Column(type: 'integer')]
    private int $age;

    #[Column(type: 'string')]
    private string $description;

    #[Column(type: 'string')]
    private string $carry;

    #[OneToOne(inversedBy: 'animals', targetEntity: File::class)]
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

    #[OneToOne(inversedBy: 'animals', targetEntity: Addresses::class)]
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
