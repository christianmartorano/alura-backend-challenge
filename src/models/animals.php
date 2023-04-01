<?php 

namespace App\models;

class Animal extends BaseModel
{
 
    protected $table = 'animals';
    protected $fillable = ['name', 'age', 'description', 'carry'];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function address()
    {
        return $this->belongsTo(Addresses::class);
    }

}

?>
