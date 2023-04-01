<?php 

namespace App\models;

class File extends BaseModel
{
    protected $table = 'files';
    protected $fillable = ['name', 'data'];

}

?>