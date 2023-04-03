<?php 

namespace Models;

use DateTime;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Column;
use Doctrine\DBAL\Types\Types;

#[MappedSuperclass]
abstract class BaseEntity
{

    #[Column(name: 'created_at', type: Types::DATETIME_MUTABLE)]
    private datetime $createdAt;

    #[Column(name: 'updated_at', type: Types::DATETIME_MUTABLE)]
    private datetime $updatedAt;

}
