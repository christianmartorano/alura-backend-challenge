<?php 

namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'addresses')]
class Addresses extends BaseEntity
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    private int|null $id = null;

    #[Column(type: 'string')]
    private string $city;

    #[Column(type: 'string', length: 2)]
    private string $province;

    public function getCity(): string
    {
        return $this->city;
    }

    public function getProvince(): string
    {
        return strtoupper($this->province);
    }

}
