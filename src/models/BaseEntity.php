<?php 

namespace Models;

use DateTime;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Column;
use Doctrine\DBAL\Types\Types;

#[MappedSuperclass]
abstract class BaseEntity
{

    #[Column(name: 'created_at', type: 'datetime')]
    private datetime $createdAt;

    #[Column(name: 'updated_at', type: 'datetime')]
    private datetime $updatedAt;

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

}
