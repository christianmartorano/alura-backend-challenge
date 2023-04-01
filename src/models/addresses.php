<?php 

namespace App\models;

class Addresses extends BaseModel
{
    protected $table = 'addresses';
    protected $fillable = ['city', 'provincy'];
}

?>
